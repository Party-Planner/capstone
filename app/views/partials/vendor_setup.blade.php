<!DOCTYPE html>

<html>

<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<style type="text/css">
  .partytype{
    float:left;
  }
  .service{
    float: left;
    padding-left: 40px;
  }
</style>

</head>

<body>
  
  {{-- Verify that this CONTROLLER is correct --}}
  {{ Form::open(array('action' => 'HomeController@doVendorSetup', 'method' => 'post')) }}
  <div class="partytype">

    <h3>Party Types You Can Serve:</h3>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Child Birthday
      </label>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Adult Birthday Party
      </label>
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Anniversary
      </label>
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox" value="">
        Other
      </label>
    </div>
  </div>
  {{ Form::close() }}


  {{-- Verify that this CONTROLLER is correct --}}
  {{ Form::open(array('action' => 'HomeController@doVendorSetup', 'method' => 'post')) }}

  <div class="service">
    <h3>Service to offer:</h3>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Catering
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        Cakes, etc.
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
        Chairs/Tables
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
        Moon Bounce
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option4">
        Pinata
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option5">
        Beverages
      </label>
    </div>

    <textarea class="form-control" rows="3"></textarea>

    {{ Form::close() }}

  </div>
</body>

</html>