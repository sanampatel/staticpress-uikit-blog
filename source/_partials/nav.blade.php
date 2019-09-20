{{-- Navigation --}}

<nav class="uk-background-default uk-hidden@m" uk-navbar id="min_nav">
    <div class="uk-navbar-left">
       <ul class="uk-navbar-nav">
          <li><a class="uk-navbar-item uk-logo uk-padding-remove-left" href="{{ $page->mainUrl }}">
             <h1 class="brand_logo nav_logo">Blog-StaticPress</h1>
          </a></li>
       </ul>
    </div>
    <div class="uk-navbar-right">
       <a class="uk-navbar-toggle"></a>
       <a class="uk-navbar-toggle uk-button" href="#offcanvas-slide" uk-toggle>
          <span uk-navbar-toggle-icon></span> 
          <span class="uk-margin-small-left">Menu</span>
       </a>
       <div id="offcanvas-slide" uk-offcanvas class="uk-hidden@m">
          <div class="uk-offcanvas-bar">
             <button class="uk-offcanvas-close" type="button" uk-close></button>
             <ul class="uk-nav uk-nav-default">
                <li><a href="./">Home</a></li>
                <li><a href="{{ $page->mainUrl }}/contact/">Contact Us</a></li>
             </ul>
          </div>
       </div>
    </div>
</nav>

<nav id="navbar" data-uk-navbar="mode: click" class="uk-visible@m">
	<div class="uk-navbar-left">
		<ul class="uk-navbar-nav">
			<li>
				<a href="{{ $page->mainUrl }}">
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
				<a href="{{ $page->mainUrl }}/contact/">
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
