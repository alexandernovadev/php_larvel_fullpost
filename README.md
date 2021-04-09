<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

Para los que no tengan instalado laravel de manera global. Usando composer, estos son los comandos que deben poner.

$ composer create-project --prefer-dist laravel/laravel blog
$ cd blog/
$ composer require laravel/ui --dev
$ php artisan ui bootstrap --auth
$ sudo apt-get install npm
$ npm install &&npm audit fix
$ php artisan make:model Post -mfc
$ composer require cviebrock/eloquent-sluggable