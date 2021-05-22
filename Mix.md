<h2>Menu <a name="menu"></a></h2>
<ul>
    <a href="#inicio">Compilando Assets (Mix)</a>
    <li>
        <a href="#instalacionNode">Instalación del Paquete "Node.js"</a>
        <ul>
            <li><a href="#primerosPasosNode">Primeros pasos</a></li>
        </ul>
    </li>
    <li><a href="#ejecutarMix">Ejecutar Mix</a></li>
</ul>

<h1>Compilando Assets (Mix) <a name="inicio"></a></h1>
<p>Sirve para que a la hora de compilar nuestra App, podamos tener todo nuestro código JavaScript y CSS, centralizado en un solo archivo (al único que deberemos llamar en nuestras "Views de Blade"), pudiendo tener nuestro código estructurado y separado en diferentes archivos según la necesidad. Además este único archivo, a la hora de llevar nuestro proyecto a producción estará "minified" para mejorar el rendimiento de carga de nuestra App.</p>

<h2>Instalación del Paquete "Node.js" <a name="instalacion"></a></h2>
<p>Link de la <a href="https://nodejs.org/es/download/package-manager/">documentación</a>.</p>

<h3>Primeros pasos <a name="primerosPasos"></a></h3>
<p>Para usar esta herramienta deberemos asegurarnos que tenemos instalado el "Node.js" y "NPM".</p>
<p>Podremos comprobarlo ejecutando en nuestra consola los siguientes comandos:</p>
<code>
node -v <br>
npm -v
</code>
<p></p>

<h2>Ejecutar Mix <a name="ejecutarMix"></a></h2>
<p>Para ejecutar las tasks y obtener nuestros archivos auto generados con el "webpack.mix.js", deberemos ejecutar uno de los siguientes comandos:</p>
<ul>
    <li>
        <p>Mix para modo Desarrollo (salida NO minificada):</p>
        <code>
            npm run dev
        </code>
        <p></p>
    </li>
    <li>
        <p>Mix para modo Producción (salida minificada):</p>
        <code>
            npm run prod
        </code>
        <p></p>
    </li>
    <li>
        <p>Cuando estamos editando el código continuamente, para no estar ejecutando el comando continuamente en cada cambio, podemos ejecutar este comando:</p>
        <code>
            npm run watch
        </code>
        <p></p>
    </li>
    <li>
        <p>Si el comando anterior "npm run watch" no funciona, o no detecta los cambios en los archivos, podemos usar esta alternativa:</p>
        <code>
            npm run watch-poll
        </code>
        <p></p>
    </li>
</ul>
