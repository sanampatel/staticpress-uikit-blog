{{-- Featured post slider --}}
<li>
	<div class="uk-height-large uk-cover-container uk-border-rounded">
		<img src="{{ $post->mainUrl }}/images/{{ basename($post->image) }}" alt="Alt img" data-uk-cover="" class="uk-cover">
		<div class="uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center">
			<div data-uk-scrollspy="cls: uk-animation-slide-bottom-small" class="uk-scrollspy-inview uk-animation-slide-bottom-small" style="">
				<h1 class="uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent">{{ $post->title }}</h1>
				<p>{!! $post->excerpt(100) !!}</p>
				<p>
					<a class="uk-button uk-button-default" href="{{ $post->getUrl() }}">Read more</a>
				</p>
			</div>
		</div>
	</div>	
</li>
{{-- Featured post slider end --}}