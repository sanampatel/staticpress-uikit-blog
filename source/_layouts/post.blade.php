@extends('_layouts.master')

@section('head')
	<title>{{ $page->seotitle ? $page->seotitle : $page->title}} | {{ $page->sitename }}</title>
	<meta name="keywords" content="{{ $page->seokeywords ? $page->seokeywords : seo("post", $page->tags, $page->categories, $page->title, "keywords") }}">
	<meta name="description" content="{{ $page->seodescription ? $page->seodescription : seo("post", "", "", $page->description, "description") }}">
@endsection

@section('content')

<div class="uk-section uk-section-default">
	<div class="uk-container">
		<div class="uk-grid" data-ukgrid>
			<div class="uk-width-2-3@m">

				{{-- Content --}}
				<article class="uk-article">
					<h1 class="uk-h2 uk-text-bold uk-margin-small-bottom">
						{{ ucwords($page->title) }}	
				    </h1>

				    <p class="uk-article-meta uk-margin-remove-top">Written by 
				    	<a href="#">Super User</a> on {{ date('F j, Y', $page->date) }}. 
				    	Posted in 
						<a href="/categories/{{ $page->categories }}" title="View posts in - {{ $page->categories }}" class="uk-text-uppercase">
							{{ ucwords($page->categories) }}	
						</a>
				    </p>

				    @if ($page->image)
						<div class="text-center">
							<img class="uk-margin border" src="{{ $page->mainUrl }}/images/{{ basename($page->image) }}">
						</div>
					@endif

					<div class="uk-margin postContent">
						@yield('postContent')
					</div>

					<div class="uk-margin">
						<span class="uk-margin-small-right">Tags: </span>
						@if ($page->tags)
							@foreach ($page->tags as $i => $tag)
								<a href="/tags/{{ $tag }}">
									<span title="View articles in {{ $tag }}" class="alter-clr-2">
										{{ ucwords($tag) }}
									</span>
								</a>
								@if (! $loop->last)
									,
								@endif 
							@endforeach
						@endif
					</div>
				</article>
				{{-- Content end --}}

				{{-- Post pagination --}}
				<nav class="uk-padding-large uk-padding-remove-horizontal">
					<div class="inline-block uk-float-left">
						@if ($next = $page->getNext())
							<a class="alter-clr-2 uk-float-left" href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
								&LeftArrow; {{ ucwords($next->title) }}
							</a>
						@endif
					</div>
					<div class="inline-block uk-float-right">
						@if ($previous = $page->getPrevious())
							<a class="alter-clr-2 uk-float-right" href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
								{{ ucwords($previous->title) }} &RightArrow;
							</a>
						@endif
					</div>
				</nav>
				{{-- Post pagination end --}}

				{{-- Disqus commnet section --}}
					@include('_partials.comments')
				{{-- Disqus commnet section end --}}

			</div>

			<div class="uk-width-1-3@m">
				@include('_partials.sidebar')
			</div>
		</div>
	</div>
</div>

@endsection