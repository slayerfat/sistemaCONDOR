# sistemaCONDOR

###node
para usar este repositorio es necesario tener instalado en el sistema [node.js](http://nodejs.org/)
chequear que node esta instalado `node -v` el sistema dira `v0.10.*` luego chequear que npm _(node package manager)_ este en el sistema `npm -v`

###composer
tambien es necesario instalar [composer](https://getcomposer.org/)

```
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

- si falla pueden `sudo !!`
- si falla porque no tienen curl
```
php -r "readfile('https://getcomposer.org/installer');" | php
mv composer.phar /usr/local/bin/composer
```

- chequear que este instalado `composer -V` el sistema dira `Composer version 1.0.-* (...) fecha`, si algo falla, chequear la documentacion de [composer](https://getcomposer.org/)

###bower

`npm install -g bower`

###clonar este repositorio
`git clone https://github.com/slayerfat/sistemaCONDOR`

###obtener las dependecias del sistema
_desde la carpeta clonada_ 

`npm install`

`bower install`

`composer install`

eso debera generar las carpetas vendor/ node_modules/ y vendor/bower_components/ sumando a otras dependecias.

# artisan

laravel viene con un CLI llamado artisan, este entre otras utilidades, sirve como interfaz para usar php como servidor local con el comando

`php artisan serve` (desde la carpeta del sistemaCONDOR)

de ese comando saldra algo como `Laravel development server started on http://localhost:8000
`

si van a localhost:8000 saldra una pagina de bienvenida.

*FELICIDADES, EL SISTEMA FUNCIONA!*

adicionalmente tiene comandos de generacion de modelos, controladores, migraciones, etc.

# la base de datos

para instalar la base de datos en el sistema necesitan el archivo *.env* con la informacion de la base de datos y luego accionar:

`php artisan migrate --seed`

y listo, la base de datos esta localmente en el sistema.

si falla pueden hacer un `composer dump-autoload` y reintentarlo, si vuelve a falla puden crear un [problema en git](https://github.com/slayerfat/sistemaCONDOR/issues) con el error.

## arbol de directorios simplificado

```
.
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── [los controladores]
│   │   ├── Middleware
│   │   ├── Requests
|   |   └── [El Router]
|   └── [Los Modelos]
├── database
│   ├── migrations (la base de datos)
│   └── seeds (los datos)
├── node_modules
│   └── [dependencias]
├── public
│   ├── js y otros
│   ├── css
│   └── los archivos al publico
├── resources
│   ├── assets
│   ├── lang
│   │   └── en
│   └── views
│       └── [Las Vistas]
├── storage
│   └── logs (errores)
├── tests (las pruebas)
└── vendor
    └── [Las Dependencias]
```

## arbol de directorios completo

```
.
├── app
│   ├── Commands
│   ├── Console
│   │   └── Commands
│   ├── Events
│   ├── Exceptions
│   ├── Handlers
│   │   ├── Commands
│   │   └── Events
│   ├── Http
│   │   ├── Controllers
│   │   │   └── [los controladores]
│   │   ├── Middleware
│   │   ├── Requests
|   |   └── [El Router]
│   ├── Providers
│   ├── Services
|   └── [Los Modelos]
├── bootstrap
├── config
├── database
│   ├── migrations
│   └── seeds
├── node_modules
│   └── [dependencias]
├── public
│   └── css
├── resources
│   ├── assets
│   ├── lang
│   │   └── en
│   └── views
│       └── [Las Vistas]
├── storage
│   └── logs
├── tests
└── vendor
    └── [Las Dependencias]
```

## Laravel PHP Framework

este sistema usa el framework Laravel de PHP [documentacion](http://laravel.com/docs/5.0)

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
