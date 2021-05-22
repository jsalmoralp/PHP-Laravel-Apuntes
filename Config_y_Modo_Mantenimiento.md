<h2>Menu <a name="menu"></a></h2>
<ul>
    <a href="#inicio">Archivos de Configuración</a>
    <li><a href="#introduccion">Introducción</a></li>
    <li><a href="#archivoEnv">Archivo ".env"</a></li>
    <li><a href="#obtenerVariables">Como llamar a cualquier variable del archivo ".env"</a></li>
    <li><a href="#accesoArchivos">Acceso a Archivos de Configuración</a></li>
    <li><a href="#guardarValores">Guardando valores en los Archivos de Configuración en tiempo de ejecución</a></li>
    <li><a href="#modoMantenimiento">Modo Mantenimiento</a></li>
</ul>

<h1>Archivos de Configuración <a name="inicio"></a></h1>

<h2>Introducción <a name="introduccion"></a></h2>
<p>Todos los archivos de configuración están almacenados dentro del directorio "config" que cuelga de la carpeta principal.</p>

<h2>Archivo ".env" <a name="archivoEnv"></a></h2>
<p>El archivo ".env" que cuelga de la carpeta raíz del proyecto, tiene que ser único pra cada máquina que ejecuta nuestra App, ya que los parámetros de configuración de cada máquina deberían ser únicos.</p>
<p>Ademas este archivo esta excluido de los controles de versión, ya que contiene información sensible (variables de inicios de sesión), y de ser publicado sería una gran falla de seguridad.</p>

<h2>Como llamar a cualquier variable del archivo ".env" <a name="obtenerVariables"></a></h2>
<p>Para llamar a cualquier variable, creada dentro de nuestro archivo ".env", usaremos la siguiEnte función:</p>
<code>
    "debug" => env("APP_DEBUG", false),
</code>
<p></p>
<p>El segundo valor pasado a la función es el valor predeterminado, por si no existe la clave.</p>

<h2>Acceso a Archivos de Configuración <a name="accesoArchivos"></a></h2>
<p>Podemos usar el "facade" de la siguiente forma:</p>
<code>
    use Illuminate\Support\Facades\App; <br>
    <br>
    $environment = App::environment();
</code>
<p></p>
<p>También podemos pasar parámetros, de la siguientes formas:</p>
<code>
    if (App::environment("local")) { <br>
    &nbsp;&nbsp;&nbsp;&nbsp;// Si el enviroment es "local" <br>
    } <br>
<br>
if (App::environment(["local", "staging"])) { <br>
    &nbsp;&nbsp;&nbsp;&nbsp;// Si el enviroment es "local" ó "staging"... <br>
}
</code>
<p></p>
<p>Otra forma acceder a los archivos de configuración por su nombre de archivo y clave, y pudiendo también pasar algunos parámetros extra, de la siguiente forma:</p>
<code>
$value = config('app.timezone'); <br>
<br>
// Dejando un valor por defecto si la clave no existe... <br>
$value = config('app.timezone', 'Asia/Seoul');
</code>
<p></p>

<h2>Guardando valores en los Archivos de Configuración en tiempo de ejecución <a name="guardarValores"></a></h2>
<p>Podemos guardar valores en los archivos de configuración pasando una matríz, de la siguiente forma:</p>
<code>
config(['app.timezone' => 'America/Chicago']);
</code>
<p></p>

<h2>Modo Mantenimiento <a name="modoMantenimiento"></a></h2>
<p>Podemos decir a nuestra App u entre en modo mantenimiento:</p>
<code>
php artisan down --secret="1630542a-246b-4b66-afa1-dd72a4c43515"
</code>
<p></p>
<p>O simplemente hasta el "down".</p>
<p>Para salir del modo de mantenimiento, podemos ejecutar uno de los siguientes comando dependiendo del gusto:</p>
<code>
php artisan up
</code>
<p></p>
<p>O usando una petición a la URL con el código secret, también podremos salir de ese modo de mantenimiento:</p>
<code>
https://example.com/1630542a-246b-4b66-afa1-dd72a4c43515
</code>
<p></p>
<br>
<p>A veces pasa que aun que pongamos nuestra App en Modo mantenimiento, algunas de las páginas podrían tener errores al estar almacenadas en cache.</p>
<p>Con el siguiente comando, vamos a forzar el renderizado de una página de error:</p>
<code>
php artisan down --render="errors::503"
</code>
<p></p>
<br>
<p>O otra opción es redireccionar todas las peticiones a una Url, cuando estemos en modo mantenimiento:</p>
<code>
php artisan down --redirect=/
</code>
