@extends('layouts.master')

@section('content')
	<br>
	<div class="container">

      <div class="row">

        <div class="col-sm-8">

			<hr>
			<h1>Donations till date : <font color="green"> <strong>{{count($donations)}}</strong></font></h1>
			<hr>
			<br>
			

        	<ul class="list-group">
				@if(count($donations) > 0)
					<div class="comments">
						@foreach ($donations as $donation)
							<?
								$date = \DateTime::createFromFormat('Y-m-d', $donation->date);
							?>
							<li class="list-group-item"><h3>
								<font  color="LightSeaGreen">{{ $date->format('d-m-Y') }}</font>
							</h3></li>
						@endforeach
					</div>
				@endif
			</ul>




			<br>
			<hr>
			<h1>Account information</h1>
			<hr>
			<br>

			<ul class="list-group">
				<div class="comments">

					<li class="list-group-item">
						<h4>Name : <font  color="LightSeaGreen">{{$userInformation[0]->name}}</font></h4> 
					</li>
					@include('functions.hall')
					<?
						$hall = hallName($userInformation[0]->hall);
					?>
					<li class="list-group-item">
						<h4>Student ID : <font  color="LightSeaGreen">{{sprintf('%07d', $userInformation[0]->id)}}</font></h4> 
					</li>

					<li class="list-group-item">
						<h4>Blood group : <font  color="LightSeaGreen">{{$userInformation[0]->bloodGroup}}</font></h4> 
					</li>

					<li class="list-group-item">
						<h4>Hall : <font  color="LightSeaGreen">{{$hall}}</font></h4> 
					</li>

					<li class="list-group-item">
						<h4>Room number : <font  color="LightSeaGreen">{{$userInformation[0]->room}}</font></h4> 
					</li>

					<li class="list-group-item">
						<h4>Area : <font  color="LightSeaGreen">{{$userInformation[0]->area}}</font></h4> 
					</li>
					
					<li class="list-group-item">
						<h4>Contact numbers : 
								@foreach($contacts as $contact)	
									 
										<font  color="LightSeaGreen">{{$contact->number}} &nbsp; &nbsp;</font>
									
								@endforeach
							
						</h4> 
					</li>

					<li class="list-group-item">
						<h4>Email : <font  color="LightSeaGreen">{{$userInformation[0]->email}}</font></h4> 
					</li>

				</div>
			</ul>	
			<br>
			<div class="form-group">
				<a class="btn btn-primary" href="/{{ auth()->user()->id }}/edit"><h2>Edit</h2></a>
			</div>	




		</div>


        @include ('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection