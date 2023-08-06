<?php

namespace App\Broadcasting;

use App\Models\Pelanggan;
use App\Models\Pemesanan;

class ChatChannel
{
    /**
     * Create a new channel instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     */
    public function join(Pelanggan $user, Pemesanan $order): array|bool
    {
        return $user->id_pelanggan === $order->id_pemesanan;
    }
}
