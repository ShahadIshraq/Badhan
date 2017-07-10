@extends('layouts.master')

{{-- @section('head')
	<script type="text/javascript">
	    var datefield=document.createElement("input")
	    datefield.setAttribute("type", "date")
	    if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
	        document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
	        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
	        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n') 
	    }
	</script>
 
	<script>
		if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
	    	jQuery(function($){ //on document.ready
	        	$('#birthday').datepicker();
	    	})
		}
	</script>
@endsection --}}

@section('content')
	
	<br>
	<div class="container">

      <div class="row">

        <div class="col-sm-8">
			<h1>Sign Up</h1>
			<form method="post" action="/register">
				{{csrf_field()}}
				
				<div class="form-group">
					<label for="name" >Name</label>
					<input type="text" class="form-control" id="name" name="name" required>
				</div>
				<div class="form-group">
					<label for="id" >Student ID <small>Example : 1305022</small></label>
					<input type="number" class="form-control" id="id" name="id" required>
				</div>


				<div class="form-group">
					<label for="blood_group" >Blood Group</label>
					<select name="blood_group" class="form-control" id="blood_group" name="blood_group" required >
						<option disabled selected value style="display:none"> -- select an option -- </option>
	    				<option value="A+">A+</option>
	    				<option value="A-">A-</option>
	    				<option value="B+">B+</option>
	    				<option value="B-">B-</option>
	    				<option value="AB+">A+</option>
	    				<option value="AB-">A-</option>
	    				<option value="O+">B+</option>
	    				<option value="O-">B-</option>
	  				</select>
  				</div>

				<div class="form-group">
					<label for="dateOfBirth" >Date of birth</label>
					{{-- <input type="date" class="form-control" id="birthday" name="birthday" size="20" />--}}
					<input type="text" class="form-control" name="dateFrom" value="<?php echo date('d-m-Y'); ?>" />
					
					{{-- Keeping the php part for using later --}}
					
					{{-- $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
					echo $new_date; --}}

				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" required>
				</div>

				<div class="form-group">
					<label for="password">Confirm Password</label>
					<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary">Register</button>
				</div>

				<div class="form-group">@include('layouts.errors')</div>

			</form>
		</div>

        @include ('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection