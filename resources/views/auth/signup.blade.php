@extends('layouts.master')


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
					<label for="bloodGroup" >Blood Group</label>
					<select name="bloodGroup" class="form-control" id="bloodGroup" name="bloodGroup" required >
						<option disabled selected value style="display:none"> -- select an option -- </option>
	    				<option value="A+">A+</option>
	    				<option value="A-">A-</option>
	    				<option value="B+">B+</option>
	    				<option value="B-">B-</option>
	    				<option value="AB+">AB+</option>
	    				<option value="AB-">AB-</option>
	    				<option value="O+">O+</option>
	    				<option value="O-">O-</option>
	  				</select>
  				</div>

				<div class="form-group">
					<label for="dateOfBirth" >Date of birth <br><small>Example : 06-01-2017 (The leading zeros are needed.)</small></label>
					{{-- <input type="date" class="form-control" id="birthday" name="birthday" size="20" />--}}
					<input type="text" class="form-control" name="dateOfBirth" placeholder="<?php echo date('d-m-Y'); ?>" />
					
					{{-- Keeping the php part for using later --}}
					
					{{-- $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
					echo $new_date; --}}

				</div>

				<div class="form-group">
					<label for="hall" >Redidential hall</label>
					<select name="hall" class="form-control" id="hall" name="hall" required >

						<option disabled selected value style="display:none"> -- select an option -- </option>
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
					<label for="room">Room number <br><small>If resident</small></label>
					<input type="number" class="form-control" id="room" name="room">
				</div>

				<div class="form-group">
					<label for="area">Area <br><small>Address in Dhaka. Example : Dhanmondi</ADDRESS></small></label>
					<input type="text" class="form-control" id="area" name="area">
				</div>

				<div class="form-group">
					<label for="lastDonation" >Date of last donation <br><small>Example : 06-01-2017 (The leading zeros are needed.)</small></label>
					<input type="text" class="form-control" name="lastDonation"  placeholder="<?php echo date('d-m-Y'); ?>"/>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" required>
				</div>

				<div class="form-group">
					<label for="number">Contact number</label>
					<input type="text" class="form-control" id="number" name="number" required>
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