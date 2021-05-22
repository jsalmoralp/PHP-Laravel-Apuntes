# Menu <a name="menu"></a>
- [PHP-Laravel-Apuntes](#inicio)
- 1 [Instalación del Proyecto con Composer](#instalacionComposer)
- 2 [Instalación de Jetstream](#instalacionJetstream)
- 3 [Instalaciones Adicionales](#instalacionesAdicionales)
- 3.1 [Instalación de Sail](#instalacionSail)


# PHP-Laravel-Apuntes <a name="inicio"></a>
<p>Este es mi proyecto base y proyecto para tener códigos de ejemplo en Laravel.</p>


## Instalación del Proyecto con Composer <a name="instalacionComposer"></a>
<p>Primero descargamos [Composer](https://getcomposer.org/download/), que será el manejador de dependencias que usaremos a la hora de instalar/actualizar nuestro proyecto/dependencias/plugins, para nuestro proyecto en Laravel.</p>
<p>También deberemos descragarnos [Xampp](https://www.apachefriends.org/es/download.html), que será nuestro Servidor Web, con el cuál también obtendremos la instalación de PHP y MariaDB (que será la base de datos que usaremos).</p>
<p>NOTA: Primero instalar Xampp, ya que a la hora de instalar Composer, nos pedirá la localización de donde tenemos instalado el PHP.</p>
<p>Aqui te dejo la [guia de la documentación oficial](https://laravel.com/docs/8.x/installation) para instalar un nuevo proyecto de Laravel.</p>
<p>El comando utilizado para crear este proyecto:</p>
```
composer create-project laravel/laravel "Apuntes Laravel"
```


## Instalación de Jetstream <a name="instalacionJetstream"></a>
<p>[Documentación Oficial de Jetstream](https://jetstream.laravel.com/2.x/introduction.html)</p>
<p>Comandos utilizados para este proyecto:</p>
```
// Instalación de Jetstream
composer require laravel/jetstream
php artisan jetstream:install livewire --teams
// Finalizando la instalación de Jetstream
npm install && npm run dev
php artisan migrate
```


## Instalación de AdminLTE <a name="instalacionAdminLTE"></a>
<p>Para una correcta instalación de AdminLTE seguir su [wiki oficial](https://github.com/jeroennoten/Laravel-AdminLTE/wiki).</p>
<p>Los comandos usados en este proyecto son:</p>
```
composer require jeroennoten/laravel-adminlte
php artisan adminlte:install
php artisan adminlte:plugins install
```


## Instalaciones Adicionales <a name="instalacionesAdicionales"></a>
### Instalación de Sail <a name="instalacionSail"></a>
<p>Sail es una interfaz de línea de comandos muy sencilla, que nos proveerá de un punto de apoyo para construir nuestra App de Laravel usando PHP, MySQL y Redis, sin tener experiencia previa.</p>
<p>Para instalar Sail, deberemos ejecutar el siguiente código dentro de la carpeta principal de nuestro proyecto:</p>
```
composer require laravel/sail --dev
```

<p>Cada vez que ejecutemos nuestro programa de línea de comandos deberemos ejecutar el siguiente comando, para no tener que hacer la llamada completa a Sail:</p>
```
alias sail="bash vendor/bin/sail"
```
<p>NOTA: Si usamos Windows deberemos seguir el siguiente [tutorial]/https://www.solvetic.com/tutoriales/article/8609-instalar-terminal-linux-en-windows-10/) para poder activar el terminal de linux en Windows, de esta manera podremos ejecutar el comando "bash".</p>
