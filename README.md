<h2>Menu <a name="menu"></a></h2>
<ul>
    <a href="#inicio">PHP-Laravel-CodeKiller</a>
    <li><a href="#instalacionPHP7.4">Instalación de PHP7.4 para Composer</a></li>
    <li><a href="#instalacionComposer">Instalación del Proyecto con Composer</a></li>
    <li><a href="#instalacionJetstream">Instalación de Jetstream</a></li>
    <li><a href="#instalacionLaravelCollective-Html">Instalación de LaravelCollective-Html</a></li>
    <li><a href="#instalacionSpatie-LaravelPermission">Instalación de Spatie-LaravelPermission</a></li>
    <li><a href="#instalacionLaravel-Socialite">Instalación de Laravel-Socialite</a></li>
    <li>
        <a href="#instalacionesAdicionales">Instalaciones Adicionales</a>
        <ul>
            <li><a href="#instalacionSail">Instalación Sail</a></li>
        </ul>
    </li>
</ul>


<h1>PHP-Laravel-CodeKiller <a name="inicio"></a></h1>
<p>Este es mi proyecto base y proyecto para tener códigos de ejemplo en Laravel.</p>

<h2>Instalación de PHP7.4 para Composer <a name="instalacionPHP7.4"></a></h2>
<p>Para poder utilizar Composer a sus plenas capacidades, deberemos tener instalados los siguientes paquetes de PHP:</p>
<code>
sudo apt-get install php7.4-intl php7.4-bcmath php7.4-common php7.4-json php7.4-mbstring openssl php7.4-xml </br>
sudo apt-get install php7.4-soap php7.4-curl </br>
sudo apt-get install php7.4-mysql
</code>
<p></p>

<h2>Instalación del Proyecto con Composer <a name="instalacionComposer"></a></h2>
<p>Primero descargamos <a href="https://getcomposer.org/download/">Composer</a>, que será el manejador de dependencias que usaremos a la hora de instalar/actualizar nuestro proyecto/dependencias/plugins, para nuestro proyecto en Laravel.</p>
<p>También deberemos descragarnos <a href="https://www.apachefriends.org/es/download.html">Xampp</a>, que será nuestro Servidor Web, con el cuál también obtendremos la instalación de PHP y MariaDB (que será la base de datos que usaremos).</p>
<p>NOTA: Primero instalar Xampp, ya que a la hora de instalar Composer, nos pedirá la localización de donde tenemos instalado el PHP.</p>
<p>Aqui te dejo la [guia de la documentación oficial](https://laravel.com/docs/8.x/installation) para instalar un nuevo proyecto de Laravel.</p>
<p>El comando utilizado para crear este proyecto:</p>
<code>
    composer create-project laravel/laravel "CodeKiller" <br>
    php artisan storage:link // Este comando dentro de la carpeta del proyecto
</code>
<p></p>

<h2>Instalación de Jetstream <a name="instalacionJetstream"></a></h2>
<p><a href="https://jetstream.laravel.com/2.x/introduction.html">Documentación Oficial de Jetstream</a></p>
<p>Comandos utilizados para este proyecto:</p>
<code>
    // Instalación de Jetstream <br>
    composer require laravel/jetstream <br>
    php artisan jetstream:install livewire --teams <br> <br>
    // Finalizando la instalación de Jetstream <br>
    npm install && npm run dev <br>
    php artisan migrate
</code>
<p></p>

<h2>Instalación de AdminLTE <a name="instalacionAdminLTE"></a></h2>
<p>Para una correcta instalación de AdminLTE seguir su <a href="https://github.com/jeroennoten/Laravel-AdminLTE/wiki">wiki oficial</a>.</p>
<p>Los comandos usados en este proyecto son:</p>
<code>
    composer require jeroennoten/laravel-adminlte <br>
    php artisan adminlte:install <br>
    php artisan adminlte:plugins install
</code>
<p></p>

<h2>Instalación de LaravelCollective-Html <a name="instalacionLaravelCollective-Html"></a></h2>
<p>Para una correcta instalación de LaravelCollective-Html seguir su <a href="https://laravelcollective.com/docs/6.x/html">documentación oficial</a>.</p>
<p>Los comandos usados en este proyecto son:</p>
<code>
    composer require laravelcollective/html
</code>
<p></p>

<h2>Instalación de Spatie-LaravelPermission <a name="instalacionSpatie-LaravelPermission"></a></h2>
<p>Para una correcta instalación de Spatie-LaravelPermission seguir su <a href="https://spatie.be/docs/laravel-permission/v4/introduction">documentación oficial</a>.</p>
<p>Los comandos usados en este proyecto son:</p>
<code>
    composer require spatie/laravel-permission <br>
    php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider" <br>
    php artisan migrate
</code>
<p></p>

<h2>Instalación de Laravel-Socialite <a name="instalacionLaravel-Socialite"></a></h2>
<p>Para una correcta instalación de Laravel-Socialite seguir su <a href="https://laravel.com/docs/8.x/socialite">documentación oficial</a>.</p>
<p>Los comandos usados en este proyecto son:</p>
<code>
    composer require laravel/socialite
</code>
<p></p>

<h2>Instalaciones Adicionales <a name="instalacionesAdicionales"></a></h2>

<h3>Instalación de Sail <a name="instalacionSail"></a></h3>
<p>Sail es una interfaz de línea de comandos muy sencilla, que nos proveerá de un punto de apoyo para construir nuestra App de Laravel usando PHP, MySQL y Redis, sin tener experiencia previa.</p>
<p>Para instalar Sail, deberemos ejecutar el siguiente código dentro de la carpeta principal de nuestro proyecto:</p>
<code>
    composer require laravel/sail --dev
</code>
<p></p>
<p>Cada vez que ejecutemos nuestro programa de línea de comandos deberemos ejecutar el siguiente comando, para no tener que hacer la llamada completa a Sail:</p>
<code>
    alias sail="bash vendor/bin/sail"
</code>
<p></p>
<p>NOTA: Si usamos Windows deberemos seguir el siguiente <a href="https://www.solvetic.com/tutoriales/article/8609-instalar-terminal-linux-en-windows-10/">tutorial</a> para poder activar el terminal de linux en Windows, de esta manera podremos ejecutar el comando "bash".</p>