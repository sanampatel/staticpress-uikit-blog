<div class="sidebar">

	{{-- Tag widget --}}
	<div class="tag-widget">
		<h4 class="uk-heading-line"><span>Tags</span></h4>
		<ul class="uk-list">
			@foreach($tags as $tag)
				<a class="uk-label uk-text-small tag" href="{{ '/tags/' . $tag->title }}" title="View posts in {{ $tag }}">{{ ucwords($tag->title) }}</a>
			@endforeach
		</ul>
	</div>
	{{-- Tag widget end --}}

	{{-- About widget --}}
	<div class="about-widget uk-margin-medium-top">
		<h4 class="uk-heading-line"><span>About Us</span></h4>
		<div class="uk-tile uk-tile-small uk-tile-muted uk-border-rounded">
			<div>
				{{ $settings->setting->aboutauthor }}
			</div>
		</div>
	</div>
	{{-- About widget end --}}

</div>