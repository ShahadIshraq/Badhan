@extends('layouts.master')

@section('content')
	
	<br>
	<div class="container">

      <div class="row">

        <div class="col-sm-9">
			<h1>Edit information</h1>
			<form method="post" action="/{{$userInformation[0]->id}}/save">
				{{csrf_field()}}
				 
				<div class="form-group">
					<label for="name" >Name</label>
					<input type="text" class="form-control" id="name" name="name" value="{{$userInformation[0]->name}}" required>
				</div>
			<!--	<div class="form-group">
					<label for="id" >Student ID <small>Example : 1305022</small></label>
					<input type="number" class="form-control" id="id" name="id" value="{{$userInformation[0]->name}}" required>
				</div>


				<div class="form-group">
					<label for="bloodGroup" >Blood Group</label>
					<input type="number" class="form-control" id="id" name="id" value="{{$userInformation[0]->bloodGroup}}" required>
  				</div>

				<div class="form-group">
					<label for="dateOfBirth" >Date of birth <br><small>Example : 06-01-2017 (The leading zeros are needed.)</small></label>

					<input type="text" class="form-control" name="dateOfBirth"value="{{$userInformation[0]->dateOfBirth}}" required >

				</div>
-->
				<?
					switch ($userInformation[0]->hall) {
					case 'aula':
						$hall = "Ahsan Ullah Hall";
						break;
					
					case 'nih':
						$hall = "Kazi Nazrul Islam Hall";
						break;

					case 'ch':
						$hall = "Chhatri Hall";
						break;

					case 'th':
						$hall = "Titumir Hall";
						break;

					case 'swh':
						$hall = "Suhrawardi Hall";
						break;
					case 'sh':
						$hall = "Sher-E-Bangla Hall";
						break;
					case 'rh':
						$hall = "Dr. M.A. Rashid Hall";
						break;
					default:
						$hall = "Shahid Smriti Hall";
						break;
				}
			?>

				<div class="form-group">
					<label for="hall" >Residential hall</label>
					<select name="hall" class="form-control" id="hall" name="hall" >

						<option disabled selected value style="display:none">{{ $hall }}</option>
	    				<option value="ch">Chhatri Hall</option>
	    				<option value="aula">Ahsan Ullah Hall</option>
	    				<option value="nih">Kazi Nazrul Islam Hall</option>
	    				<option value="th">Titumir Hall</option>
	    				<option value="swh">Suhrawardi Hall</option>
	    				<option value="sh">Sher-e-Bangla Hall</option>
	    				<option value="rh">Dr. M.A. Rashid Hall</option>
	    				<option value="ssh">Shahid Smriti Hall</option>
	  				</select>

  				</div>

				<div class="form-group">
					<label for="room" >Room No.</label>

					<input type="number" class="form-control" id="room" name="room" value="{{$userInformation[0]->room}}" required>

				</div>

				<div class="form-group">
					<label for="area">Area <br><small>Address in Dhaka. Example : Dhanmondi</ADDRESS></small></label>
					<input type="text" class="form-control" id="area" name="area" value="{{$userInformation[0]->area}}">
				</div>

	 			<div class="form-group">
					<label for="number">Contact number</label>
					@foreach($contacts as $contact)	
						<input type="text" class="form-control" id="number" name="{{$contact->number}}" value="{{$contact->number}}">
					@endforeach
				</div> 

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" >
				</div>

				<div class="form-group">
					<label for="password">Confirm Password</label>
					<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>

				<div class="form-group">@include('layouts.errors')</div>

			</form>
		</div>

        @include ('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection