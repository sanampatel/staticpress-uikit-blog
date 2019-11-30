---
pagination:
    collection: posts
    perPage: 4 {{-- Per page pages need to display --}}
    prefix: page
---
@extends('_layouts.master')

@section('head')
    <title>{{ $settings->setting->seotitle}} | {{ $page->sitename }}</title> 
    <meta name="keywords" content="{{ $settings->setting->seokeywords }}">
    <meta name="description" content="{{ $settings->setting->seodescription }}">
@endsection

@section('content') 
	{{-- Featured post --}}
	@if ($page->featured = true)
		<div>
			<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

			    <ul class="uk-slider-items uk-child-width-1-1">
			    	@foreach ($posts->where('featured', true) as $post)
						@include('_partials.components.featured-post')
					@endforeach
			    </ul>

			    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
			    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

			</div>
		</div>
	@endif
	{{-- Featured post end --}}

	<div class="uk-section uk-section-default">
		<div class="uk-container">
			<div class="uk-grid" data-ukgrid>
				<div class="uk-width-2-3@m">

					@foreach (($pagination->items)->where('featured', false) as $post)
						@include('_partials.components.post-preview')
					@endforeach					
				</div>
				<div class="uk-width-1-3@m uk-visible@m">
					@include('_partials.sidebar')
				</div>
			</div>

			{{-- Pagination --}}
				@include('_partials.components.pagination')
			{{-- Pagination end --}}

		</div>
	</div>
@endsection