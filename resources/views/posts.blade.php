<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/post/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
            <h5>
                {{ $post->excerpt }}
            </h5>
            <p>
                {!! $post->body !!}
            </p>
        </article>
    @endforeach
</x-layout>

