<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('boot_js')
</head>
@php
    use App\Models\Category;
    $categories = Category::all();
@endphp

<body>
    <x-app-layout>

        {{--  Barra de filtros inicio --}}
        <div class="bg-gray-600 p-4">
            <div class="container mx-auto">
                <div class="flex justify-center items-center">
                    <!-- Filtros -->
                    <div class="space-x-4">
                        <label class="text-gray-300">Filtrar por:</label>
                        @foreach ($categories as $category)
                            <a href="{{ route('posts.category', $category) }}"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Barra de filtros Fin --}}
        <div class="container py-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($posts as $post)
                    <article
                        class="w-full h-80 bg-cover bg-center @if ($loop->first) md:col-span-2 @endif()"style="background-image: url(@if ($post->image) {{ Storage::url($post->image->url) }}@else https://cdn.pixabay.com/photo/2016/10/09/08/32/digital-marketing-1725340_1280.jpg @endif)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">

                            <div>

                                @foreach ($post->tags as $tag)
                                    <a href="{{ route('posts.tag', $tag) }}"
                                        class="inline-block px-3 h-6 bg-{{ $tag->color }}-600 text-white rounded-full">
                                        {{ $tag->name }}</a>
                                @endforeach

                            </div>


                            <h1 class="text-4xl text-white leading-8 font-bold mt-2">

                                <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-4 flex justify-center ">
                {{ $posts->links() }}
            </div>

        </div>


    </x-app-layout>


</body>

</html>
