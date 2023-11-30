 @props(['filtro'])
 {{--  Barra de filtros inicio --}}
 <div class="bg-gray-600 p-4">
    <div class="container mx-auto">
        <div class="flex justify-center items-center">
        <!-- Filtros -->
            <div class="space-x-4">
                <label class="text-gray-300">Filtrar por:</label>
                    @foreach ($categories as $category)
                        <a class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium" href="{{route('posts.category', $category)}}">{{$category->name}}</a>
                    @endforeach
            </div>
        </div>
    </div>
</div>
{{-- Barra de filtros Fin --}}