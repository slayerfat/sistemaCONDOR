#sistemaCONDOR

###Node

Para usar este repositorio es necesario tener instalado en el sistema [node.js](http://nodejs.org/).


Para chequear que node esta instalado en tu sistema debes hacer un `node -v` en consola, el sistema dira `v0.10.*` luego chequear que npm _(node package manager)_ este en el sistema con un `npm -v` en consola.

###Composer
Tambien es necesario instalar [composer](https://getcomposer.org/)

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

Chequear que este instalado `composer -V` el sistema dira 

`Composer version 1.0.-* (...) fecha`

si algo falla, chequear la documentacion de 
[composer](https://getcomposer.org/)

###Bower

`npm install -g bower`

##Fork del repositorio

![](fork.png)

Cuentas claras conservan amistastades.

revisar la documentacion de github para hacer forks.

###Obtener las dependecias del sistema
_Desde la carpeta clonada:_ 

`npm install`

`bower install`

`composer install`

Si composer se queja sobre mcrypt o mysql es probable que no tengan los modulos correspondentes activados/instalados.

Para ello deberan:

`sudo apt-get install php5-mcrypt`

`sudo apt-get install php5-mysql`

`sudo apt-get install php5-gd`

Si usan xampp, wampp, lampp, deberan referirse a la documentacion de php para esos paquetes, puesto que, si falla composer, es muy probable que sea debido a los binarios de PHP utilizados por su computadora.

Otra opcion es copiar el archivo de composer.phar a donde estan los archivos de php de xampp.

*google es tu aliado*

Si todo sale bien, debera generar las carpetas vendor/ node_modules/ y vendor/bower_components/ sumando a otras dependecias.

#Sobre las dependencias

Es importante destacar que cada branch puede tener diferentes dependencias, lo que implica hacer installs adicionales segun el branch.

#La base de datos

Para instalar la base de datos en el sistema necesitan el archivo **.env** con la informacion de la base de datos.

En este archivo estan las variables usadas por mysql.


```
APP_ENV=local
APP_DEBUG=true
APP_KEY=ALGUN_STRING_ALEATORIO_TAL...

#PARA EL ELEGIDO
APP_USER=SEUDONIMO_TAL...
APP_USER_EMAIL=CORREO_TAL...
APP_USER_PASSWORD=CLAVE_TAL...
APP_USERS_PASSWORD=CLAVE_TAL...

#PARA LA BASE DE DATOS
DB_HOST=HOST_TAL...
DB_DATABASE=NOMBRE_DE_LA_BASE_DE_DATOS_TAL...
DB_USERNAME=CLAVE_DE_LA_BASE_DE_DATOS_TAL...
DB_PASSWORD=USUARIO_DE_LA_BASE_DE_DATOS_TAL...

CACHE_DRIVER=file
SESSION_DRIVER=file
```

se hace de esta forma para mantener las claves seguras, etc, el pito y la guacharaca.

cuando tengan el archivo pueden hacer un simple:

`php artisan migrate --seed`

y listo, la base de datos esta localmente en el sistema.

Si falla pueden hacer un `composer dump-autoload` y reintentarlo, si vuelve a falla puden crear un [problema (issue) en github](https://github.com/slayerfat/sistemaCONDOR/issues) con el error y la descripcion del mismo.

#Artisan

Laravel viene con un CLI llamado artisan, este entre otras utilidades, sirve como interfaz para usar php como servidor local con el comando:

`php artisan serve` *(desde la carpeta del sistemaCONDOR).*

De ese comando saldra algo como:

`Laravel development server started on http://localhost:8000`

Si van a **localhost:8000** saldra una pagina de bienvenida.

*FELICIDADES, EL SISTEMA FUNCIONA!*

Adicionalmente tiene comandos de generacion de modelos, controladores, migraciones, etc. Pueden chequear los mismos con:

`php artisan`

Este comando botara la lista completa de comandos disponibles, todo documentado en [laravel.com](http://laravel.com/docs/5.0)

#Arbol de directorios simplificado

```
.
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── [Los Controladores]
│   │   ├── Middleware
|   |   |   └── [Las Autentificaciones y otros]
│   │   ├── Requests
|   |   |   └── [las Validaciones]
|   |   └── [El Router]
|   └── [Los Modelos]
├── config
│   └── [La configuracion del sistema]
├── database
│   ├── migrations (la base de datos)
│   └── seeds (los datos)
├── node_modules
│   └── [Dependencias]
├── public
│   ├── js y otros
│   ├── css
│   ├── vendor
│   |   └── [Gulp clones] <- dependencias
│   └── [los archivos al publico]
├── resources
│   ├── assets
│   ├── lang
|   |   ├── [Futura capeta de es_ve]
│   │   └── en
│   └── views
│       └── [Las Vistas]
├── storage
│   └── logs (errores)
├── tests (las pruebas)
└── vendor
    └── [Las Dependencias]
```

##Laravel PHP Framework

Este sistema usa el framework Laravel de PHP [documentacion](http://laravel.com/docs/5.0)

###License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
