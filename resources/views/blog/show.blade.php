@extends('layouts.app')
@section('mytitle', $post->title)
@section('content')
<div class="w-4/6 m-auto text-left py-5">
    <div class="py-3">
        <h1 class="title-font text-3xl font-semibold uppercase text-gray-900 mb-1">
            {{ $post->title }}
        </h1>
    </div>
    <h2 class="tracking-widest text-lg title-font font-medium text-gray-500 mb-1">Diposting
        oleh
        <span class="font-bold text-gray-600">{{ $post->user->name }}</span> |
        {{ date('j F Y', strtotime($post->updated_at)) }}
    </h2>
    <div class="py-5">
        <img src="{{ url('images/' . $post->image_path) }}" class="object-cover md:h-96 w-full pt-8" alt="{{ $post->image_path }}">
    </div>
    <div class="text-xl leading-relaxed mb-3">
        {!! $post->description !!}
    </div>
</div>

<div id="disqus_thread" class="w-4/5 m-auto mt-8 border-t"></div>

<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://myblog-id.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
@endsection