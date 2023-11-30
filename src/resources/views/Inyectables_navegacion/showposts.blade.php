 @section('posts')
     <div class="container py-10 ml-48 color">
         <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
         <div class="text-lg text-gray-500 mb-2">
             {!! $post->extract !!}
         </div>
         <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
             {{-- Contenido Principal --}}
             <div class="lg:col-span-2  ">
                 <figure>
                     @if ($post->image)
                         <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url) }}"
                             alt="">
                     @else
                         <img class="w-full h-80 object-cover object-center"
                             src="https://cdn.pixabay.com/photo/2016/10/09/08/32/digital-marketing-1725340_1280.jpg"
                             alt="">
                     @endif
                 </figure>
                 <div class="prose">
                     {!! $post->body !!}
                 </div>
                 <p>Publicado por: <strong>{{ $post->user->name }}</strong></p>
                 <p>Ultima actualizacion: {{ $post->updated_at }}</p>
             </div>
             {{-- Contenido relacionado --}}
             <aside>
                 <h1 class="text-2xl font-bold text-gray-600 mb-4">Mas en {{ $post->category->name }}</h1>
                 <ul>
                     @foreach ($similares as $similar)
                         <li class="mb-4">
                             <a class="flex" href="{{ route('posts.show', $similar) }}">

                                 @if ($similar->image)
                                     <img class="w-36 h-20 object-cover object-center"
                                         src="{{ Storage::url($similar->image->url) }}" alt="">
                                 @else
                                     <img class="w-36 h-20 object-cover object-center"
                                         src="https://cdn.pixabay.com/photo/2016/10/09/08/32/digital-marketing-1725340_1280.jpg"
                                         alt="">
                                 @endif
                                 <span class="ml-2 text-gray-600">
                                     {{ $similar->name }}
                                 </span>
                             </a>
                         </li>
                     @endforeach
                 </ul>
             </aside>
         </div>
     </div>
 @endsection
