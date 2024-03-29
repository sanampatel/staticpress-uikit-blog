@extends('_layouts.master')

@section('head')
	<title>{{ seo("category", ucwords($page->name()), "", "", "") }} | {{ $page->sitename }}</title>
	<meta name="keywords" content="Tag, {{ seo("category", $page->name(), "", "", "") }}, {{ seo("category", $page->name(), "", "", "") }} category">
	<meta name="description" content="Post under category {{ seo("category", $page->name(), "", "", "") }}.">
@endsection

@section('content')
		
	<div class="uk-section uk-section-default">
		<div class="uk-container">
			<div class="uk-grid" data-ukgrid>
				<div class="uk-width-2-3@m">
					<h2 class="uk-margin-medium-bottom uk-heading-line">
						<span>Posts under category '{{ ucwords($page->name()) }}'</span>
					</h2>
					@forelse (posts_filter_cat($posts, $page) as $post)
						@include('_partials.components.post-preview')
					@empty
						<p>No posts to show.</p>
					@endforelse				
				</div>
				<div class="uk-width-1-3@m">
					@include('_partials.sidebar')
				</div>
			</div>
		</div>
	</div>
@endsection

