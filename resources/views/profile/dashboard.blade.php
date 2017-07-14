@extends('layouts.master')

@section('content')
	<br>
	<div class="container">

      <div class="row">

        <div class="col-sm-8">
			<hr>
			<h1>Donations till date : {{count($donations)}}</h1>
			<hr>
			<br>
			<div class="dates">
				@if(count($donations) > 0)
					<ol class="list-group">
						@foreach($donations as $donation)
							<?
								$date = \DateTime::createFromFormat('Y-m-d', $donation->date);
							?>
							<h3><li>{{ $donation->date }}</li></h3>
						@endforeach
					</ol>
				@endif
			</div>
			<br>
			<hr>
			<h1>Account information</h1>
			<hr>
			<br>
			<div class="form-group">
				<h4>Name : <u color="grey"><strong>{{$userInformation[0]->name}}</strong></u></h4> 
			</div>
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

					default:
						$hall = "Shahid Smriti Hall";
						break;
				}
			?>
			<div class="form-group">
				<h4>Student ID : <u color="grey"><strong>{{sprintf('%07d', $userInformation[0]->id)}}</strong></u></h4> 
			</div>

			<div class="form-group">
				<h4>Blood group : <u color="grey"><strong>{{$userInformation[0]->bloodGroup}}</strong></u></h4> 
			</div>

			<div class="form-group">
				<h4>Hall : <u color="grey"><strong>{{$hall}}</strong></u></h4> 
			</div>

			<div class="form-group">
				<h4>Room number : <u color="grey"><strong>{{$userInformation[0]->room}}</strong></u></h4> 
			</div>

			<div class="form-group">
				<h4>Area : <u color="grey"><strong>{{$userInformation[0]->area}}</strong></u></h4> 
			</div>

			<div class="form-group">
				<h4>Email : <u color="grey"><strong>{{$userInformation[0]->email}}</strong></u></h4> 
			</div>		

			<div class="form-group">
					<a class="btn btn-secondary" href="/{{ auth()->user()->id }}/edit">Edit</a>
				</div>	




		</div>


        @include ('layouts.sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
	
@endsection