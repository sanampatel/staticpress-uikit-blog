<article class="uk-article">

    <h2 class="uk-h3">
		<a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="uk-link-reset">
			{{ ucwords($post->title) }}	
    	</a>
    </h2>

    <p class="uk-article-meta">Written by 
    	<a href="#">Super User</a> on {{ date('F j, Y', $post->date) }}. 
    	Posted in 
		<a href="/categories/{{ $post->categories }}" title="View posts in - {{ $post->categories }}" class="uk-text-uppercase">
			{{ ucwords($post->categories) }}	
		</a>
    </p>

    <p>{!! $post->excerpt(200) !!}</p>

    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
            <a class="uk-button uk-button-text" href="#">Read more</a>
        </div>
    </div>

</article>

@if (! $loop->last)
	<hr class="border-b my-8">
@endif 	