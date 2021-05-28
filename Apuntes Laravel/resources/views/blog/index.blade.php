<x-blog-layout>
    <div class="container py-8">
        {{-- Grid de Posts --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif)">
                    <div class="flex flex-col justify-center w-full h-full px-8">
                        <div>
                            @foreach ($post->tags as $tag)
                            <a href="{{route('blog.tag', $tag)}}" class="inline-block px-3 h6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                            <a href="{{route('blog.show', $post)}}">{{$post->name}}</a>
                        </h2>
                    </div>
                </article>
            @endforeach
        </div>
        {{-- Paginación de la Grid de Posts --}}
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-blog-layout>
