<x-shop-layout>
    <div class="container py-8">
        {{-- Grid de Productos --}}
        <section class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <h2 class="text-5xl">{{__('Products')}}</h2>
            @foreach ($products as $product)
            <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($product->image) {{Storage::url($product->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif)">
                    <div class="flex flex-col justify-center w-full h-full px-8">
                        <div>
                            @foreach ($product->tags as $tag)
                            <a href="{{route('shop.tag', $tag)}}" class="inline-block px-3 h6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                            <a href="{{route('shop.show', $product)}}">{{$product->name}}</a>
                        </h2>
                    </div>
                </article>
            @endforeach
            </section>
        {{-- Paginación de la Grid de Productos --}}
        <div class="mt-4">
            {{$products->links()}}
        </div>

        {{-- Grid de Subscripciones --}}
        <section class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <h2 class="text-5xl">{{__('Subscriptions')}}</h2>
            @foreach ($subscriptions as $subscription)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 @endif" style="background-image: url(@if($subscription->image) {{Storage::url($subscription->image->url)}} @else https://cdn.pixabay.com/photo/2020/03/27/15/33/norway-4973935_960_720.jpg @endif)">
                    <div class="flex flex-col justify-center w-full h-full px-8">
                        <div>
                            @foreach ($subscription->tags as $tag)
                            <a href="{{route('blog.tag', $tag)}}" class="inline-block px-3 h6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h2 class="mt-2 text-4xl font-bold leading-8 text-white">
                            <a href="{{route('blog.show', $subscription)}}">{{$subscription->name}}</a>
                        </h2>
                    </div>
                </article>
            @endforeach
            </section>
        {{-- Paginación de la Grid de Subscripciones --}}
        <div class="mt-4">
            {{$subscriptions->links()}}
        </div>
    </div>
</x-shop-layout>
