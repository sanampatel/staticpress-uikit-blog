@extends('_layouts.master')

@section('content')
	{{-- Container --}}
	<div class="uk-section uk-section-default">
		<div class="uk-container">
		
			<h2 class="uk-margin">Contact</h2>
			<p>Fill out the below and i'll be sure to get back to you soon!</p>
		
			{{-- Contact form --}}
			<form class="uk-form-stacked uk-margin" name="contact" method="POST" netlify>

				<div class="uk-margin">
					<div uk-grid>
						<div class="uk-width-1-2">
							<label class="uk-form-label" for="name">Name</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="name" type="text" placeholder="Enter your name...">
							</div>
						</div>
						<div class="uk-width-1-2">
							<label class="uk-form-label" for="email">Email</label>
							<div class="uk-form-controls">
								<input class="uk-input" id="email" type="text" placeholder="Enter your email...">
							</div>
						</div>
					</div>
				</div>

				<div class="uk-margin">
					<label class="uk-form-label" for="message">Select</label>
					<div class="uk-form-controls">
						<textarea class="uk-textarea" id="message" rows="5" placeholder="Message..."></textarea>
					</div>
				</div>

				<div class="uk-margin">
					 <button class="uk-button uk-button-primary">Submit</button>
				</div>

			</form>
			{{-- Contact form end --}}

		</div>

	</div>
	{{-- Container end --}}

@endsection