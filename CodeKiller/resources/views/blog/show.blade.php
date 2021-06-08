<x-blog-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-600">{{$post->name}}</h1>

        <div class="mb-2 text-lg text-gary-500">
            {!!$post->extract!!}
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            {{-- Contenido principal --}}
            <div class="lg:col-span-2">
                <figure>
                    <img class="object-cover object-center w-full h-80" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif" alt="">
                </figure>
                <div class="mt-4 text-base text-gray-500">
                    {!!$post->body!!}
                </div>
            </div>

            {{-- Contenido relacionado --}}
            <aside>
                <h2 class="mb-4 text-2xl font-bold text-gray-600">Más en {{$post->category->name}}</h2>

                <ul>
                    @foreach ($similares as $similar)
                    <li class="mb-4">
                        <a class="flex" href="{{route('blog.show', $similar)}}">
                            <img class="object-cover object-center {{-- h-20 w-36 --}}" height="80px" width="144px" src="@if($similar->image) {{Storage::url($similar->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif" alt="">
                            <span class="ml-2 text-gray-600">
                                {{$similar->name}}
                            </span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </aside>

        </div>
    </div>
</x-blog-layout>
