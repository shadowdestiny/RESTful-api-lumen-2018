# Project Test API

Un ejemplo de RESTful API creado con Laravel Lumen.

## Pre-requisitos

1) Este RESTful API fue creado con [Laravel Lumen](https://lumen.laravel.com/), que nos exige una versión moderna de PHP y algunas de sus extensiones instaladas:

```
PHP >= 5.6.4
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension
```

Para el desarrollo se utilizo el meta-paquete XAMPP 
[descargar aquí](https://www.apachefriends.org/download.html). Se recomienda descargar 
XAMPP con PHP 7.1 (recomendado).

2) También necesitaremos composer ([descargar aquí](https://getcomposer.org/)) para descargar las dependencias de [Laravel Lumen](https://lumen.laravel.com/).

3) Puedes instalar un cliente para probar todos los *end-points*. 
[Postman](https://www.getpostman.com/) es una buena opcion, 
aplicación gratuita para Windows, GNU/Linux y OS X. Después de instalar Postman se puede **importar** una colección
de *end-points* que se creo para este test en: `<REPO>/lmarin/Project Test API.postman_collection`.

Una vez importada se podra tener acceso a todos los servicios de Lumen como en la siguiente imagen:

![Postman](/public/img/print.png)


## Instalación para Desarrollo

1) Instalar dependencias de Composer (ejecutar desde el directorio raiz de este proyecto).
```
composer install
```
2) Configurar base de datos:

Importa la base de datos *MySQL dump* en este archivo `<REPO>/database/sql/project_test_api.sql`.
Este archivo contiene dos usuarios, un proyecto y una tarea de demostración.

2.1) Se puede importar la base de datos usando algún cliente web como PHPMyAdmin.
2.2) Crear un usuario que se pueda conectar a esta base de datos, por ejemplo:
```
Base de datos:  project_test_api
Usuario:        project_test_user
Constraseña:    HzH6MGvKXHssFmvv
```
2.3) El archivo llamado `.env` en la raíz de este proyecto debe tener las siguientes caracteristicas, con los siguientes datos:
```
APP_ENV=local
APP_DEBUG=true
APP_KEY=QpN1zSwDEyrRwuWabUKIboskIlIm3nC8
APP_TIMEZONE=UTC

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=project_test_api
DB_USERNAME=project_test_user
DB_PASSWORD=HzH6MGvKXHssFmvv

CACHE_DRIVER=file
QUEUE_DRIVER=sync
```

3) Iniciar tu servidor en el puerto 8085
```
php -S localhost:8085 -t public
```

## Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

### Official Documentation

Documentation for the framework can be found on the [Lumen website](http://lumen.laravel.com/docs).

### Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Lumen framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
