<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> -->

<!-- <p align="center">
<a href="https://github.com/Erisukmawan/KodeMaya/actions"><img src="https://github.com/Erisukmawan/KodeMaya/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/Erisukmawan/KodeMaya"><img src="https://img.shields.io/packagist/dt/Erisukmawan/KodeMaya" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/Erisukmawan/KodeMaya"><img src="https://img.shields.io/packagist/v/Erisukmawan/KodeMaya" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/Erisukmawan/KodeMaya"><img src="https://img.shields.io/packagist/l/Erisukmawan/KodeMaya" alt="License"></a>
</p> -->

# KodeMaya Project

## Documents
- [Airtable Task](https://airtable.com/appdEfaX58o2Y1Zvd/tblQJwZRrqlFLyiUm/viwRufDIxlKQVMYbQ?blocks=hide)
- [Product Requirements](https://docs.google.com/document/d/1ArVKnLahrpUSWaYxMQ2OXA-y1mR7QjekpVBHT8yxnL0/edit)
- [Bussiness Process](https://docs.google.com/document/d/1nKZieumMZe3Bmbz7qSoxKSLAjvYeZpAW/edit)
- [Data Analysis](https://docs.google.com/document/d/176rklXfiJ_Qlzmh3cmKt_gvRWmNhvM1f3D2XVGuXg_o/edit)
- [ER Diagram](https://app.diagrams.net/#HErisukmawan%2FKodeMaya%2Fmain%2Fresources%2FER%20Diagram%20KodeMaya.drawio)

## Instalasi
- clone repo
- masuk folder, ketik di cmd
- ubah .env.example jadi .env
- `composer install`
- `php artisan migrate` *(skip)*
- `php artisan database:restore` *(skip)*
- `php artisan key:generate`
- `php artisan serve`

## Note
1. Bagian perintah yg di skip itu buat create table dan restore database, karna dah ada di server jadi ga perlu dipake.  
2. Backup db otomatis mingguan (buat server)
3. Settings buat auto backup db ada di app/Console/Kernel.php#L16
4. Database development sementara pake :
```
  [  Server SSH  ]

IP         : 20.187.120.241
User       : vps1
Password   : MagnumMax123
Port       : 22

  [ Server MySQL ]

Host       : 20.187.120.241
User       : kodemaya
Password   : kodemayabangkit1
Database   : db_kodemaya
Port       : 3306
```

## Project Team
1. Edwin Liona Jaya (10121154) - Product Manager
2. Hanif Ahmad Syauqi (10121161 - Website Developer
3. Eri Sukmawan (10121139) - UI/UX Designer
4. M. Ilham Gymnastiar (10121124) - Database Administrator

## Fitur
### Admin
- [ ] Admin Dashboard
- [ ] Kelola Pengguna
- [ ] Kelola Mentor
- [ ] Kelola Keuangan
- [ ] Kelola Admin

### Mentor
- [ ] Mentor Dashboard
- [ ] Kelola Keuangan
- [ ] Konsultasi
- [ ] Tulung

### Pengguna
- [ ] Landing Page
- [ ] Fitur Konsultasi
- [ ] Fitur Tulung
- [ ] Fitur Pembayaran
- [ ] Fitur Profile
