<p align="center"><a href="https://laravel.com" target="_blank"><img src="./public/assets/images/logo/logo.svg" width="400" alt="Laravel Logo"></a></p>
<hr>

## Documents
- [Airtable Task](https://airtable.com/appdEfaX58o2Y1Zvd/tblQJwZRrqlFLyiUm/viwRufDIxlKQVMYbQ?blocks=hide)
- [Product Requirements](https://docs.google.com/document/d/1ArVKnLahrpUSWaYxMQ2OXA-y1mR7QjekpVBHT8yxnL0/edit)
- [Bussiness Process](https://docs.google.com/document/d/1nKZieumMZe3Bmbz7qSoxKSLAjvYeZpAW/edit)
- [Data Analysis](https://docs.google.com/document/d/176rklXfiJ_Qlzmh3cmKt_gvRWmNhvM1f3D2XVGuXg_o/edit)
- [ER Diagram](https://app.diagrams.net/#HErisukmawan%2FKodeMaya%2Fmain%2Fresources%2FER%20Diagram%20KodeMaya.drawio)
- [DFD](https://app.diagrams.net/#G1tOvD5KVKz-hHhk-hVI6491_QdeNAMofs)

## Instalasi
- clone repo
- masuk folder, ketik di cmd
- ubah .env.example jadi .env
- `composer install`
- `php artisan migrate`
- `php artisan database:restore`
- `php artisan key:generate`
- `php artisan serve`

## Production Access
```
  [  Server FTP  ]

Host       : ftp.kodemaya.my.id
User       : production@kodemaya.my.id
Password   : KodeMayaBangkit#321
Port       : 21

  [ cPanel Access ]

cPanel URL : https://miku.kawaiihost.net:2083/
User       : wbngixxd
Password   : KodeMayaBangkit#321
```

## Project Team
1. Edwin Liona Jaya (10121154) - Product Manager
2. Hanif Ahmad Syauqi (10121161 - Backend Developer
3. Eri Sukmawan (10121139) - UI/UX Designer & FrontEnd Developer
4. M. Ilham Gymnastiar (10121124) - Database Administrator


### Admin
- [x] Admin Dashboard
- [x] Review Pesanan
- [x] pengiriman pemesanan
- [x] Update Profile

### Mentor
- [x] Mentor Dashboard
- [x] Ambil Pesanan
- [x] Negosiasi
- [x] Buat Kontrak
- [x] Penyerahan Pemesanan
- [x] Update Profile

### Pelanggan
- [x] Landing Page
- [x] Pelanggan Dashboard
- [x] Buat Pesanan
- [x] Negosiasi
- [x] Pembayaran
- [x] Review Pesanan
- [x] Update Profile

### Keuangan
- [x] Keuangan Dashboard
- [x] Rekap Keuangan
      
## Note
- Backup db otomatis mingguan (buat server)
- Settings buat auto backup db ada di app/Console/Kernel.php#L16
