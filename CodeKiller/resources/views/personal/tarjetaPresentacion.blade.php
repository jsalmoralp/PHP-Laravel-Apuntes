<x-app-layout>
    <div class="max-w-5xl px-2 py-8 mx-auto sm:px-6 lg:px-8">
        <div class="w-full bg-blue-300 bg-center bg-cover rounded-lg p-5">
            <h1 class="text-5xl font-bold text-center">{{__('Hello!! I am')}} Joan Salmoral Parramon</h1>
            <p class="pt-8 text-xl">Esta web es de <b>demostración</b>, y para que las empresas vean <b>mis habilidades con la programación</b>.</p>
            <p class="pt-2 text-base">Puedes crear un usuario normal, o puedes ver todo lo que ofrece mi web (incluyendo el panel de administrador completo) usando mis credenciales.
            </p>
            <ul class="list-disc list-inside">
                <li class="text-base list-item">User:  jsalmoralp@gmail.com</li>
                <li class="text-base list-item">Password:  contraseña</li>
            </ul>
            <p class="pt-2 text-lg"><span class="text-green-500 underline">Siéntete libre de hacer cualquier modificación desde el panel de control</span> ya que el contenido que se puede modificar desde los paneles de administración (ya sea de la web o del blog), esta auto generado con los Seeders de Laravel.</p>
            <p class="pt-6 text-3xl text-center">¡¡Ale pues a navegar y echale un buen vistazo a todas las opciones y características!!</p>
        </div>

        <section class="grid grid-cols-1 gap-6 mt-5 md:grid-cols-2 lg:grid-cols-3">
            <article class="w-full bg-center bg-cover rounded-lg h-80 md:col-span-2" style="background-image: url('/images/JoanSalmoralParramon.png')">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">{{__('About me')}}...</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-purple-500">
                        {{__('My networks')}}:
                        <a target="_blank" href="https://www.linkedin.com/in/jsalmoralp/" class="inline-block">
                            <img class="object-cover object-center w-10 h-10" src="/images/linkedin.png" alt="LinkedIn Logo">
                        </a>
                        <a target="_blank" href="https://github.com/jsalmoralp" class="inline-block">
                            <img class="object-cover object-center w-10 h-10" src="/images/github.png" alt="GitHub Logo">
                        </a>
                    </h2>
                </div>
            </article>
            <article class="w-full bg-gradient-to-br from-blue-600 to-blue-300 bg-center bg-cover rounded-lg h-80">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">PHP</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a target="_blank" href="https://github.com/jsalmoralp/PHP-Laravel-CodeKiller">
                            Laravel<br>
                            <small>Code Killer</small>
                        </a>
                    </h2>
                </div>
            </article>
            <article class="w-full bg-gradient-to-br from-blue-600 to-yellow-500 bg-center bg-cover rounded-lg h-80">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">Kotlin</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a target="_blank" href="https://github.com/jsalmoralp/Kotlin-AndroidStudio-Apuntes">
                            Android Studio<br>
                            <small>{{__('Notes')}}</small>
                        </a>
                    </h2>
                </div>
            </article>
            <article class="w-full bg-gradient-to-br from-blue-600 to-blue-300 bg-center bg-cover rounded-lg h-80">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">PHP</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a target="_blank" href="https://github.com/jsalmoralp/PHP-Librerias">
                            PHP<br>
                            <small>{{__('Library')}}</small>
                        </a>
                    </h2>
                </div>
            </article>
            <article class="w-full bg-gradient-to-br from-blue-600 to-blue-300 bg-center bg-cover rounded-lg h-80">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">PHP</span>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">Json</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a target="_blank" href="https://github.com/jsalmoralp/PHP-Composer-RiotApi_LeagueOfLegends">
                            PHP RiotAPI<br>
                            <small>{{__('Json web reader')}}</small>
                        </a>
                    </h2>
                </div>
            </article>
            <article class="w-full bg-gradient-to-br from-yellow-600 to-yellow-200 bg-center bg-cover rounded-lg h-80">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">JavaScript</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a target="_blank" href="https://github.com/jsalmoralp/JavaScript-DiscordBot-General">
                            Discord Bot<br>
                            <small>General Cow</small>
                        </a>
                    </h2>
                </div>
            </article>
            <article class="w-full bg-gradient-to-br from-red-400 to-blue-400 bg-center bg-cover rounded-lg h-80">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">Java</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a target="_blank" href="https://github.com/jsalmoralp/Java-PluginMinecraft-AllInOne">
                            Plugin Minecraft<br>
                            <small>AllInOne</small>
                        </a>
                    </h2>
                </div>
            </article>
            <article class="w-full bg-gad bg-gradient-to-br from-blue-500 bg-yellow-300 bg-cover rounded-lg h-80">
                <div class="flex flex-col justify-center w-full h-full px-8">
                    <div>
                        <span class="inline-block px-3 text-black bg-purple-300 rounded-full h6">Python</span>
                    </div>
                    <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                        <a target="_blank" href="https://github.com/jsalmoralp/Python-DiscordBot-Apuntes">
                            Discord Bot<br>
                            <span>{{__('Notes')}}</span>
                        </a>
                    </h2>
                </div>
            </article>
        </section>
    </div>
</x-app-layout>
