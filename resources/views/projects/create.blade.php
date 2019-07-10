@extends('layout')

@section('content')
	<h1 class="title">Create a New Project</h1>

	<form method="POST" action="/projects" style="margin-bottom: 1em;">
		@csrf

		<div class="field">
			<label class="label" for="title">Project Title</label>
			<div class="control">
				<input 
					type="text" 
					class="input {{ $errors->has('title') ? 'is-danger' : '' }}" 
					id="title" 
					name="title" 
					value="{{old('title')}}" 
					placeholder="Project Title"
					required
				>
			</div>
		</div>

		<div class="field">
			<label class="label" for="description">Project Description</label>
			<div class="control">
				<textarea
					name="description"
					class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" 
					id="description" 
					placeholder="Project description"
					required
				>
					{{old('description')}}
				</textarea>
			</div>
		</div>

		<div class="field">
			<div>
				<button type="submit" class="button is-link">Create Project</button>
			</div>
		</div>

		@include ('errors')

	</form>
@endsection