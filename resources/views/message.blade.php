@extends('layouts.master')

@section('content')
	<br>
	<div class="container">
	  <h1>{{ $title }}</h1>
      <div class="row">
	      <div class="col-sm-8" >
	      	<ul>
	      		@foreach($messages as $message)
	      			<li>{{$message}}</li>
	      		@endforeach
	      	</ul>
	      </div>
      
      <div class="row">
        <div class="col-sm-8" >
        	<a class="btn btn-secondary" href="{{ url()->previous() }}">Go back</a> &nbsp;
      		<a class="btn btn-secondary" href="/">Home</a>
      	</div>
      	@include('layouts.sidebar')
      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection