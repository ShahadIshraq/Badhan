@extends('layouts.master')

@section('content')
	@include('functions.hall')
	@include('functions.getContacts')
	<br>
	<div class="container">
		@if(count($requests) > 0)
	  		<h1>Requests pending</h1>
	  	@else
	  		<h1>No requests pending.</h1>
	  	@endif
      	<div class="row">
	    	<div class="col-sm-20" >

	    		<ul class="list-group">
			
					<div class="comments">
						@foreach ($requests as $request)
							<li class="list-group-item">
								<strong>ID :</strong>&nbsp; {{$request->id}}  &nbsp;&nbsp; 
					      		<strong>Name :</strong>&nbsp; {{$request->name}} &nbsp;&nbsp;
					      		<strong>Hall :</strong>&nbsp; {{hallName($request->hall)}} &nbsp;&nbsp;
					      		<strong>Room :</strong>&nbsp; {{$request->room}} &nbsp;&nbsp;
					      		<strong>Area :</strong>&nbsp; {{$request->area}} &nbsp;&nbsp;
					      		<strong>Contact numbers :</strong>&nbsp;
					      		<? $contacts = getContacts($request->id); ?>
					      		<ul>
					      		@foreach($contacts as $contact) <li>{{$contact->number}}</li> @endforeach
					      		</ul>
					      		&nbsp;&middot;&nbsp;&nbsp;
					      		<a href="/approve/{{$request->id}}" style="color:green"><strong>Approve</strong></a> &nbsp;&nbsp;  
					      		&middot; &nbsp;&nbsp;
					      		<a href="/remove/{{$request->id}}" style="color:red"><strong>Remove</strong></a>
							</li>
						@endforeach
					</div>
				</ul>		
 			</div>
	    </div><!-- /.row -->
      <br>
      <hr>
      <div class="row">
        <div class="col-sm-8" >
        	<a class="btn btn-secondary" href="{{ url()->previous() }}">Go back</a> &nbsp;
      		<a class="btn btn-secondary" href="/">Home</a>
      	</div>
      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection