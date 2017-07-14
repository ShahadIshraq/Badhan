@extends('layouts.master')

@section('content')
	<br>
	<div class="container">
	  <h1>Search results</h1>
      <div class="row">
	      <div class="col-sm-8" >
	      	<ul>
	      		@foreach($donors as $donor)
	      			<li>ID : <strong>{{$donor->id}}</strong> ,  Name : <strong>{{$donor->name}}</strong> , Area : <strong>{{$donor->area}}</strong> </li>
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