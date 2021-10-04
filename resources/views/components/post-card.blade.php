@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">

    @if($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{asset('storage') }}/{{$post->image->url}}" alt="">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2021/08/26/18/31/road-6576857_960_720.jpg" alt="">
    @endif
    
    <div class="px-6 py-4">

        <h1 class="text-xl mb-2 font-bold">
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->name }}
            </a>
        </h1>

        <div class="text-gray-700 text-base">
            {!! $post->extract !!}
        </div>

        <div class="mt-2">
            @foreach ($post->tags as $tag)
                <a href="{{ route('posts.tag', $tag) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-600">
                    {{ $tag->name }}
                </a>
            @endforeach
        </div>

    </div>

</article>