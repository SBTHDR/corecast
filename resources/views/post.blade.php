<x-layout>
    <article>
        <h1>
            {!! $post->title !!}
        </h1>
        <div>
            <h5><?= $post->date; ?></h5>
        </div>
        <div>
            <p>
                {!! $post->body !!}
            </p>
        </div>
    </article>

    <a href="/">Go back</a>
</x-layout>
