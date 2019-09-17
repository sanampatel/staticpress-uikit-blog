{{-- Navigation --}}
<nav id="navbar" data-uk-navbar="mode: click">
	<div class="uk-navbar-left uk-visible@m">
		<ul class="uk-navbar-nav">
			<li>
				<a href="./">
					<h1 class="brand_logo nav_logo">
						Blog-StaticPress
					</h1>
				</a>
			</li>
		</ul>
	</div>
	<div class="uk-navbar-right nav-overlay">
		<a class="uk-navbar-toggle uk-visible@m" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
		<ul class="uk-navbar-nav">
			<li>
				<a href="./contact/">
					Contact Us
				</a>
			</li>
			<div class="uk-navbar-item">
				<a class="uk-visible@s" style="margin-right: 4px" href="{{ $settings->setting->fblink }}" data-uk-icon="facebook"></a>
				<a class="uk-visible@s" style="margin-right: 4px" href="{{ $settings->setting->twitterlink }}" data-uk-icon="twitter"></a>
				<a class="uk-visible@s" style="margin-right: 4px" href="{{ $settings->setting->googlepluslink }}" data-uk-icon="google-plus"></a>
				<a class="uk-visible@s" style="margin-right: 4px" href="{{ $settings->setting->instagramlink }}" data-uk-icon="instagram"></a>
				<a class="uk-navbar-toggle uk-hidden@m" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
			</div>
		</ul>
	</div>
	<div id="vue-search">
		<search></search>
	</div>
</nav>
{{-- Navigation end --}}
