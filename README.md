<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p> -->

<!-- <p align="center">
<a href="https://github.com/Erisukmawan/KodeMaya/actions"><img src="https://github.com/Erisukmawan/KodeMaya/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/Erisukmawan/KodeMaya"><img src="https://img.shields.io/packagist/dt/Erisukmawan/KodeMaya" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/Erisukmawan/KodeMaya"><img src="https://img.shields.io/packagist/v/Erisukmawan/KodeMaya" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/Erisukmawan/KodeMaya"><img src="https://img.shields.io/packagist/l/Erisukmawan/KodeMaya" alt="License"></a>
</p> -->

# KodeMaya Project

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
1. Bagian perintah yg di skip itu untuk create table dan restore database, karna udah ada di server jadi tidak perlu digunakan.  
2. Backup db akan otomatis mingguan
3. Settings untuk auto backup db ada pada app/Console/Kernel.php#L16
4. Server dan database development sementara pake :
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
5. Autodeploy sudah ter setup, setiap push otomatis update runner action ke server, dan bisa di cek di <a href="http://20.187.120.241" target="_blank">Kodemaya Dev</a>

#Teamwork
1. Edwin Liona Jaya
2. Hanif Ahmad Syauqi
3. Eri Sukmawan
4. M. Ilham Gymnastiar

