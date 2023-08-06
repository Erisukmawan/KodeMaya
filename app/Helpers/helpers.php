<?php

use App\Models\Mentor;
use App\Models\Pelanggan;
use App\Models\Pemesanan;
use Carbon\Carbon;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Flysystem\Filesystem;
use League\Flysystem\FileAttributes;
use Illuminate\Filesystem\FilesystemAdapter;
use Pusher\Pusher as Pusher;

// File Management
function searchFile($listContent, $filename)
{
    foreach ($listContent as $item) {
        if ($item['extra_metadata']['filename'] == $filename) {
            $result = $item;
        } else {
            $result = false;
        }
    }

    return $result;
}

function getDriveID($gdriveurl)
{
    $filter1 = preg_match('/drive\.google\.com\/open\?id\=(.*)/', $gdriveurl, $fileid1);
    $filter2 = preg_match('/drive\.google\.com\/file\/d\/(.*?)\//', $gdriveurl, $fileid2);
    $filter3 = preg_match('/drive\.google\.com\/uc\?id\=(.*?)\&/', $gdriveurl, $fileid3);
    if ($filter1) {
        $fileid = $fileid1[1];
    } else if ($filter2) {
        $fileid = $fileid2[1];
    } else if ($filter3) {
        $fileid = $fileid3[1];
    } else {
        $fileid = null;
    }

    return ($fileid);
}


function uploadFile(UploadedFile $file, string $uploadtype)
{
    $storage = Storage::disk('google');

    $uuid =  Str::uuid();
    $filename = $uuid . "." . $file->extension();

    $mainFolder = env('GOOGLE_DRIVE_FOLDER');
    $endfolder = "";
    $uploadpath = "";
    if ($uploadtype == 'profile') {
        $endfolder = env('GOOGLE_DRIVE_FOLDER_PROFILE');
        $uploadpath = $mainFolder . "/" . $endfolder . "/" . $filename;
    } else if ($uploadtype == 'document') {
        $endfolder = env('GOOGLE_DRIVE_FOLDER_DOCUMENT');
        $uploadpath = $mainFolder . "/" . $endfolder . "/" . $filename;
    } else if ($uploadtype == 'project') {
        $endfolder = env('GOOGLE_DRIVE_FOLDER_PROJECT');
        $uploadpath = $mainFolder . "/" . $endfolder . "/" . $filename;
    } else if ($uploadtype == 'system') {
        $endfolder = env('GOOGLE_DRIVE_FOLDER_SYSTEM');
        $uploadpath = $mainFolder . "/" . $endfolder . "/" . $filename;
    } else {
        $endfolder = $mainFolder;
        $uploadpath = $mainFolder;
    }

    $storage->write($uploadpath, $file->getContent());
    $listContent = $storage->listContents($endfolder);
    $metadata = searchFile($listContent, $uuid);

    return $metadata;
}

function makeUrl(FileAttributes $metadata)
{
    $storage = Storage::disk('google');

    return $storage->getAdapter()->getUrl($metadata['path'], true);
}

function deleteFile(string $file_id)
{
    $storage = Storage::disk('google');
    $delete = $storage->delete($file_id);

    return $delete;
}


// Chat Functions
function initPusher(): Pusher
{
    $options = array(
        'cluster' => 'ap1',//env('PUSHER_APP_CLUSTER'),
        'useTLS' => true,
    );

    $pusher = new Pusher(
        '2144bc95f007e22453fb',//env('PUSHER_APP_KEY'),
        'd5ec24ef45217ccd201e',//env('PUSHER_APP_SECRET'),
        '1619388',//env('PUSHER_APP_ID'),
        $options
    );

    return $pusher;
}

function customerSendMessage(Pelanggan $user, string $order_id, string $message, string $type)
{
    $order = Pemesanan::where('id_pemesanan', $order_id)->first();
    $pusher = initPusher();
    $now = Carbon::now()->timezone('Asia/Manila')->timestamp;
    $data = array(
        'order_id' => $order_id,
        'user_id' => $user->id_pelanggan,
        'user_name' => $user->nama,
        'msg_from' => 'customer',
        'msg_date' => $now,
        'msg_type' => $type,
        'msg_content' => $message,
    );
    $pusher->trigger('chat-mentor.'.$order->id_mentor, 'chat-event', $data);

    return $now;
}

function mentorSendMessage(Mentor $user, string $order_id, string $message, string $type)
{
    $order = Pemesanan::where('id_pemesanan', $order_id)->first();
    $pusher = initPusher();
    $now = Carbon::now()->timezone('Asia/Manila')->timestamp;
    $data = array(
        'order_id' => $order_id,
        'user_id' => $user->id_mentor,
        'user_name' => $user->nama,
        'msg_from' => 'mentor',
        'msg_date' => $now,
        'msg_type' => $type,
        'msg_content' => $message,
    );
    $pusher->trigger('chat-customer.'.$order->id_pelanggan, 'chat-event', $data);

    return $now;
}

// Tripay
function buatTagihanPembayaran() {
    return 'TRX-001';
}