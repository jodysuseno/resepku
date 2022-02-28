# Resepku

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

Resepku adalah project untuk keperluan test teknikal untuk melamar magang yang dibangun dengan framework laravel 9

## Installation

Resepku requires [PHP](https://www.php.net/) v8.1.2 | [MariaDb](https://mariadb.org/) v10.4.22 to run.

Clone Repository
```sh
git clone https://github.com/jodysuseno/resepku.git
```
Masuk ke dalam folder project
```sh
cd resepku
```
Buat database dengan nama "resepku" dan jalankan perintah migrate dengan seeder untuk membuat strutur tabel dan isinya
```sh
php artisan migrate --seed
```
Jalankan server laravel dengan peritah artisan
```sh
php artisan serve
```
Buka dengan url http://127.0.0.1:8000/ untuk membuka webnya

> Note: 
ketika dijalankan seedernya terdapat beberapa record database yang sudah terisi 3 user, 6 resep, dan beberapa jumlah like pada setiap resep yang sudah ada.
