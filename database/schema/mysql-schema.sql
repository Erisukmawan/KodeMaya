CREATE TABLE pelanggan (
    id_pelanggan int PRIMARY KEY AUTO_INCREMENT,
    nama varchar(40) NOT NULL,
    email varchar(50) NOT NULL,
    alamat varchar(150) NOT NULL,
    telp varchar(15) NOT NULL,
    password varchar(150) NOT NULL,
    foto_profil varchar(150) DEFAULT NULL,
    status_akun enum('AKTIF', 'TIDAK AKTIF') DEFAULT 'TIDAK AKTIF'
);

CREATE TABLE mentor (
    id_mentor int PRIMARY KEY AUTO_INCREMENT,
    nama varchar(40) NOT NULL,
    email varchar(50) NOT NULL,
    alamat varchar(150) NOT NULL,
    telp varchar(15) NOT NULL,
    password varchar(150) NOT NULL,
    foto_profil varchar(150) DEFAULT NULL,
    keahlian varchar(150) NOT NULL,
    dokumen varchar(150) NOT NULL,
    status_mentor enum('TIDAK AKTIF', 'AKTIF', 'SEDANG MENGERJAKAN'),
    status_akun enum('AKTIF', 'DIPROSES', 'TIDAK AKTIF') DEFAULT 'TIDAK AKTIF'
);

CREATE TABLE pegawai (
    id_pegawai int PRIMARY KEY AUTO_INCREMENT,
    nama varchar(40) NOT NULL,
    email varchar(50) NOT NULL,
    alamat varchar(150) NOT NULL,
    telp varchar(15) NOT NULL,
    password varchar(150) NOT NULL,
    foto_profil varchar(150) DEFAULT NULL,
    jabatan enum('ADMINISTRASI', 'KEUANGAN') DEFAULT 'ADMINISTRASI',
    status_akun enum('AKTIF', 'TIDAK AKTIF') DEFAULT 'TIDAK AKTIF'
);

CREATE TABLE kontrak (
    id_kontrak int PRIMARY KEY AUTO_INCREMENT,
    id_mentor int,
    id_pelanggan int,
    nama_projek varchar(50) NOT NULL,
    deskripsi_projek varchar(255) NOT NULL, 
    waktu_kontrak datetime DEFAULT CURRENT_TIMESTAMP,
    tenggat_waktu datetime NOT NULL,
    total_harga int DEFAULT 0,
    status_kontrak enum('MENUNGGU', 'SETUJU', 'TIDAK SETUJU') DEFAULT 'MENUNGGU',
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan (id_pelanggan),
    FOREIGN KEY (id_mentor) REFERENCES mentor (id_mentor)
);

CREATE TABLE pemesanan (
    id_pemesanan int PRIMARY KEY AUTO_INCREMENT,
    id_pelanggan int,
    id_mentor int,
    id_pegawai int,
    id_kontrak int,
    kode_bank varchar(15),
    deskripsi_pesanan varchar(255) NOT NULL,
    kategori enum('WEBSITE', 'DESKTOP', 'UI/UX', 'ANDROID', 'DS/ML/AI') DEFAULT 'WEBSITE',
    status_pembayaran enum('BELUM DIBAYAR', 'TERTUNDA ', 'TERBAYAR ', 'KADALUARSA') DEFAULT 'BELUM DIBAYAR',
    status_pesanan enum('MENUNGGU', 'DIPROSES', 'DIPERIKSA', 'SELESAI', 'DIBATALKAN') DEFAULT 'MENUNGGU',
    nama_projek varchar(100),
    deskripsi_projek varchar(255),
    file_projek varchar(150),
    total_harga int DEFAULT 0,
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan (id_pelanggan),
    FOREIGN KEY (id_mentor) REFERENCES mentor (id_mentor),
    FOREIGN KEY (id_pegawai) REFERENCES pegawai (id_pegawai),
    FOREIGN KEY (id_kontrak) REFERENCES kontrak (id_kontrak)
);

CREATE TABLE migrations (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  migration varchar(191) NOT NULL,
  batch int(11) NOT NULL,
  PRIMARY KEY (id)
)