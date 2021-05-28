@props(['post'])

<article class="mb-8 overflow-hidden bg-white rounded-lg shadow-lg">
    <img class="object-cover object-center w-full h-72" src="@if($post->image) {{Storage::url($post->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif" alt="">

    <div class="px-6 py-4">
        <h2 class="mb-2 text-xl font-bold">
            <a href="{{route('blog.show', $post)}}">{{$post->name}}</a>
        </h2>
        <div class="text-base text-gray-700">
            {!!$post->extract!!}
        </div>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{route('blog.tag', $tag)}}" class="inline-block px-3 py-1 mr-2 text-sm bg-gray-200 rounded-full text-gary-700">{{$tag->name}}</a>
        @endforeach
    </div>
</article>
