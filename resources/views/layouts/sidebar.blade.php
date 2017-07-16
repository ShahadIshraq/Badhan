
<div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="border-left:1px solid #EEE;height:500px" align="center">
@if(\Auth::check())
<div class="sidebar-module sidebar-module-inset">
  <h4>Search for donor</h4>
  <form method="post" action="/result">
        {{csrf_field()}}
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
            <label for="area" >Area <br><small>Optional</small></label>
            <input type="text" class="form-control" id="area" name="area">
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Search</button>
          </div>

    </form>
</div>
@else
  <h4>You are not logged in!</h4>
  You need to be logged in to search for donor. <br>
  If you have an account then please <a href="login">log in</a>.<br>
  Otherwise, please <a href="/contact">contact us</a> to place a request.  
@endif
{{-- <div class="sidebar-module">
  <h4>Archives</h4>
  <ol class="list-unstyled">
    <li><a href="#">March 2014</a></li>
    <li><a href="#">February 2014</a></li>
    <li><a href="#">January 2014</a></li>
    <li><a href="#">December 2013</a></li>
    <li><a href="#">November 2013</a></li>
    <li><a href="#">October 2013</a></li>
    <li><a href="#">September 2013</a></li>
    <li><a href="#">August 2013</a></li>
    <li><a href="#">July 2013</a></li>
    <li><a href="#">June 2013</a></li>
    <li><a href="#">May 2013</a></li>
    <li><a href="#">April 2013</a></li>
  </ol>
</div>
<div class="sidebar-module"> --}}
  <br>
  <hr>
  <br>
  <h4>Elsewhere</h4>
  <ol class="list-unstyled">
    <li><a href="#">GitHub</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Facebook</a></li>
  </ol>
</div>
</div><!-- /.blog-sidebar -->