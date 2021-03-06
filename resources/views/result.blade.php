@extends('layouts.master')

@section('content')
	<br>
	<div class="container">
	  <h1>Search results</h1>
      <div class="row">
	      <div class="col-sm-8" >
	      	<ul>
	      		@foreach($donors as $donor)
	      			<?
	      				$contacts = App\Contact::where('user_id', '=', $donor->id)->get();
	      			?>
	      			<li>ID : <strong>{{$donor->id}}</strong> ,  Name : <strong>{{$donor->name}}</strong> , Area : <strong>{{$donor->area}}</strong> , Contact Numbers :
	      			@foreach($contacts as $contact)	
									 
						<strong>{{$contact->number}}</strong> &nbsp; &nbsp;
									
					@endforeach 
	      			</li>
	      		@endforeach
	      	</ul>
	      </div><!-- /.row -->
	      @include('layouts.sidebar')
      </div>
      
      <div class="row">
        <div class="col-sm-8" >
        	<a class="btn btn-secondary" href="{{ url()->previous() }}">Go back</a> &nbsp;
      		<a class="btn btn-secondary" href="/">Home</a>
      	</div>
      	
      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection