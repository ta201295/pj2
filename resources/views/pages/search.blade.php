@extends('main')

@section('title', 'Search')

@section('stylesheets')

<link  rel="stylesheet" href="template_web/css/search.css" />

@section('content')

    <div class="all-title-box">
		<div class="s013">
			<form>
				<fieldset>
					<legend>Search</legend>
				</fieldset>
				<div class="inner-form">
					<div class="left">
						<div class="input-wrap first">
							<div class="input-field first">
								<label>Search Name</label>
								<input type="text" placeholder="Name" />
							</div>
						</div>
					</div>
					<button class="btn-search" type="button">SEARCH</button>
				</div>
			</form>
   		</div>
    </div>

@endsection