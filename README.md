<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


# Cara Menjalankan Project ini.

### Persyaratan

- pastikan sudah terinstall git pada device anda. periksa dengan command *git --version*
- pastikan versi php7.3 ke atas sudah terinstall pada device anda. periksa dengan command *php --version*
- pastikan composer sudah terinstall pada device anda. periksa dengan command *composer --version*

### Cara Menjalankan

- git clone https://github.com/antheiz/ourvet-app.git
- cd ourvet-app/
- composer install
- *cp .env.example .env* atau *copy .env.example .env*
- php artisan key:generate
- php artisan config:cache
- php artisan serve
- buka browser favorit kamu, dan ketik/masukan ini *http://localhost:8000* or *http://127.0.0.1:8000*
- jika sukses akan muncul seperti ini.
<p align="center"><a href="https://laravel.com" target="_blank"><img src="public/img/demo.png" width="800" style="border-radius:5px;"></a></p>



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
