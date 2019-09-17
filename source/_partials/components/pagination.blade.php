<ul class="uk-pagination uk-margin-large-top">
	@if ($previous = $pagination->previous)
		{{-- Previous --}}
		<li>
			<a href="{{ $previous }}" title="Previous Page">
				<span class="uk-margin-small-right" uk-pagination-previous>
				</span> Previous
			</a>
		</li>
	@endif
	@foreach ($pagination->pages as $pageNumber => $path)
		{{-- Total pages --}}
		<li>
			<a href="{{ $path }}" title="Go to Page {{ $pageNumber }}" class="{{ $pagination->currentPage == $pageNumber ? 'selected' : '' }}">
				{{ $pageNumber }}
			</a>
		</li>
	@endforeach
	@if ($next = $pagination->next)
		{{-- Next --}}
		<li>
			<a href="{{ $next }}" title="Next Page">
				Next <span class="uk-margin-small-left" uk-pagination-next>
				</span>
			</a>
		</li>
	@endif
</ul>