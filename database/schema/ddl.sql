CREATE TABLE pelanggan (
    id_pelanggan int PRIMARY KEY AUTO_INCREMENT,
    nama varchar(40) NOT NULL,
    email varchar(50) NOT NULL,
    alamat varchar(150) NOT NULL,
    telp int NOT NULL,
    password varchar(150) NOT NULL,
    foto_profil varchar(150) NOT NULL
);

CREATE TABLE mentor (
    id_mentor int PRIMARY KEY AUTO_INCREMENT,
    nama varchar(40) NOT NULL,
    email varchar(50) NOT NULL,
    alamat varchar(150) NOT NULL,
    telp int NOT NULL,
    password varchar(150) NOT NULL,
    foto_profil varchar(150) NOT NULL,
    keahlian varchar(150) NOT NULL,
    dokumen varchar(150) NOT NULL,
    saldo int DEFAULT 0
);

CREATE TABLE pegawai (
    id_pegawai int PRIMARY KEY AUTO_INCREMENT,
    nama varchar(40) NOT NULL,
    email varchar(50) NOT NULL,
    alamat varchar(150) NOT NULL,
    telp int NOT NULL,
    password varchar(150) NOT NULL,
    foto_profil varchar(150) NOT NULL,
    saldo int DEFAULT 0,
    jabatan enum("ADMINISTRASI", "BENDAHARA") NOT NULL
);

CREATE TABLE bank (
    kode_bank varchar(15) PRIMARY KEY NOT NULL,
    nama_bank varchar(50) NOT NULL,
    biaya int NOT NULL
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
    status_kontrak enum('MENUNGGU', 'SEPAKAT', 'TIDAK_SEPAKAT', 'KADALUARSA', 'SELESAI') DEFAULT 'MENUNGGU',
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
    kategori enum('WEBSITE', 'DESKTOP', 'UI/UX', 'ANDROID', 'DS/ML/AI', 'OTHER'),
    status_pembayaran enum('BELUM_DIBAYAR', 'TERTUNDA ', 'TERBAYAR ', 'KADALUARSA') DEFAULT 'BELUM_DIBAYAR',
    nama_projek varchar(150) NOT NULL,
    deskripsi_projek varchar(255) NOT NULL,
    status_pesanan enum('MENUNGGU', 'SEDANG_DIPROSES', 'SEDANG_DIPERIKSA', 'SELESAI', 'DIBATALKAN') DEFAULT 'MENUNGGU',
    file_projek varchar(255) NOT NULL,
    total_harga int NOT NULL,
    FOREIGN KEY (id_pelanggan) REFERENCES pelanggan (id_pelanggan),
    FOREIGN KEY (id_mentor) REFERENCES mentor (id_mentor),
    FOREIGN KEY (id_pegawai) REFERENCES pegawai (id_pegawai),
    FOREIGN KEY (id_kontrak) REFERENCES kontrak (id_kontrak),
    FOREIGN KEY (kode_bank) REFERENCES bank (kode_bank)
);