<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          type="text/css" media="screen"/>
    <style>
        .margin-top-xl {
            margin-top: 60px;
        }

        .github-fork-ribbon:before, .github-fork-ribbon:after {
            height: 30px !important;

        }
        .github-fork-ribbon:before {
            background-color: #f16b2f !important;
        }
    </style>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.0/gh-fork-ribbon.min.css"/>
    <!--[if lt IE 9]>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.0/gh-fork-ribbon.ie.min.css"/>
    <![endif]-->
</head>
<body>
<a class="github-fork-ribbon" target="_blank"
   href="https://github.com/shadowdestiny/RESTful-api-lumen-2018" title="Fork me on GitHub">Fork me on GitHub</a>
<div class="container margin-top-xl">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <h3 id="project-manager-api">Project Test API</h3>
            <p>Un ejemplo de RESTful API creado con Laravel Lumen.</p>
            <div class="alert alert-success">

                <a href="https://github.com/shadowdestiny/RESTful-api-lumen-2018" target="_blank">Ver este
                    proyecto en Github</a>
            </div>
            <h4 id="pre-requisitos">Pre-requisitos</h4>
            <p>1) Este RESTful API fue creado con <a href="https://lumen.laravel.com/">Laravel Lumen</a>, que nos exige
                una
                versión moderna de PHP y algunas de sus extensiones instaladas:</p>
            <div class="alert alert-info">
            <pre><code>PHP &gt;= 5.6.4
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
XML PHP Extension</code>
            </pre>
            </div>
            <p>Para el desarrollo se utilizó el meta-paquete XAMPP 
                <a href="https://www.apachefriends.org/download.html">descargar aquí</a>. Se recomienda descargar 
XAMPP con PHP 7.1 (recomendado).</p>
            <p>2) También necesitaremos composer (<a href="https://getcomposer.org/">descargar aquí</a>) para descargar
                las
                dependencias de <a href="https://lumen.laravel.com/">Laravel Lumen</a>.</p>
            <p>Puedes instalar un cliente para probar todos los <em>end-points</em>.
                <a href="https://www.getpostman.com/">Postman</a>, tiene
                tiene una
                aplicación gratuita para Windows, GNU/Linux y OS X. Después de instalar Postman puedes
                <strong>importar</strong> una colección
                de <em>end-points</em> se encuentra en: <code>&lt;REPO&gt;/lmarin/Project Test API.postman_collection
                    Manager API.postman_collection</code>.</p>
            <p>Una vez importada la colección se tendra acceso a todos los servicios de Lumen como en la siguiente
                imagen:</p>
            <p>
                <img class="img-fluid"
                     src="/public/img/print.png"
                     alt="Postman"></p>
            <h4 id="instalación-para-desarrollo">Instalación para Desarrollo</h4>

            <p>1) Instalar dependencias de Composer (ejecutar desde el directorio raiz de este proyecto).</p>
            <pre><code>composer install</code></pre>
            <p>2) Configurar base de datos:</p>
            <p>Importar el <em>MySQL dump</em> de este archivo <code>&lt;REPO&gt;/database/sql/project_manager_api.sql</code>.
                Este archivo contiene dos usuarios, un proyecto y una tarea de demostración.</p>
            <p>2.1) Importa esta base de datos usando algún cliente web como PHPMyAdmin o Sequel Pro.
                2.2) Crea un usuario que se pueda conectar a esta base de datos, por ejemplo:</p>
            <div class="alert alert-warning">
            <pre><code>Base de datos:  project_test_api
Usuario:        project_test_user
Constraseña:    HzH6MGvKXHssFmvv</code></pre>
            </div>
            <p>2.3) Crea un archivo llamado <code>.env</code> en la raíz de este proyecto, con los siguientes datos:</p>
            <div class="alert alert-info">
            <pre><code>APP_ENV=local
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
QUEUE_DRIVER=sync</code>
            </pre>
            </div>
           
            <h4 id="lumen-php-framework">Lumen PHP Framework</h4>
            <p><a href="https://travis-ci.org/laravel/lumen-framework"><img
                            src="https://travis-ci.org/laravel/lumen-framework.svg" alt="Build Status"></a>
                <a href="https://packagist.org/packages/laravel/lumen-framework"><img
                            src="https://poser.pugx.org/laravel/lumen-framework/d/total.svg" alt="Total Downloads"></a>
                <a href="https://packagist.org/packages/laravel/lumen-framework"><img
                            src="https://poser.pugx.org/laravel/lumen-framework/v/stable.svg"
                            alt="Latest Stable Version"></a>
                <a href="https://packagist.org/packages/laravel/lumen-framework"><img
                            src="https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg"
                            alt="Latest Unstable Version"></a>
                <a href="https://packagist.org/packages/laravel/lumen-framework"><img
                            src="https://poser.pugx.org/laravel/lumen-framework/license.svg" alt="License"></a></p>
            <p>Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive,
                elegant
                syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen
                attempts to take the pain out of development by easing common tasks used in the majority of web
                projects,
                such as routing, database abstraction, queueing, and caching.</p>
            <h5 id="official-documentation">Official Documentation</h5>
            <p>Documentation for the framework can be found on the <a href="http://lumen.laravel.com/docs">Lumen
                    website</a>.
            </p>
            <h5 id="security-vulnerabilities">Security Vulnerabilities</h5>
            <p>If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at
                taylor@laravel.com. All security vulnerabilities will be promptly addressed.</p>
            <h5 id="license">License</h5>
            <p>The Lumen framework is open-sourced software licensed under the <a
                        href="http://opensource.org/licenses/MIT">MIT
                    license</a></p>
        </div>
    </div>
</div>
</body>
</html>