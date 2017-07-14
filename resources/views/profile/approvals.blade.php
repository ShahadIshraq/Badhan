@extends('layouts.master')

@section('content')
	<br>
	<div class="container">
	  <h1>Requests pending</h1>
      <div class="row">
	      <div class="col-sm-8" >
	      	<ul>
	      		@foreach($requests as $request)
	      			<li>ID : {{$request->id}} ,  Name : {{$request->name}} <a href="/approve/{{$request->id}}" style="color:green">Approve</a> &middot; <a href="/remove/{{$request->id}}" style="color:red">Remove</a></li>
	      		@endforeach
	      	</ul>
	      </div><!-- /.row -->
      </div>
      
      <div class="row">
        <div class="col-sm-8" >
        	<a class="btn btn-secondary" href="{{ url()->previous() }}">Go back</a> &nbsp;
      		<a class="btn btn-secondary" href="/">Home</a>
      	</div>
      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection