<x-app-layout>

    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 pt-24 pb-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{ $category->name }}</h1>

        @foreach ($posts as $post)
            
            <x-post-card :post="$post"></x-post-card>

        @endforeach

        <div class="mt-4">
            {{ $posts->links() }}
        </div>

    </div>

</x-app-layout>