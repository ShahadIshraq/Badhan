@extends ('layouts.master')

@section ('content')
    
    @include('layouts.carousel')

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"> <span class="text-muted">Welcome to Badhan BUET Zone</span></h2>
          <p class="lead">The page is still under construction. So there might be some bugs. Feel free to report problems to the  developer at shahad.nowhere@gmail.com</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="/img/15095667_1206214669473326_7560856259169416316_n.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 push-md-5">
          <h2 class="featurette-heading">Search for doners<span class="text-muted"><a href="/search"> here.</a></span></h2>
          <p class="lead">Use blood group to find donors. But you have to be logged in to do so.</p>
        </div>
        <div class="col-md-5 pull-md-7">
          <img class="featurette-image img-fluid mx-auto" src="/img/12794361_1219602281403204_317258922881204277_n.jpg"  alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">More options are coming<span class="text-muted"></span></h2>
          <p class="lead">The hard part is over, The updates will now be coming regularly.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-fluid mx-auto" src="/img/18320693_1345102668909740_4460021826967401935_o.jpg">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

@endsection

@section('extra')
    @include('layouts.bootjs')
@endsection