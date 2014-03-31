@extends('layouts.master')

@section('title')
  Resumé
  @stop

@section('content')
<div class="container-fluid">
  <style type="text/css"> {
      margin-left: 30px;
      font-family: 'Open Sans', sans-serif;
    }
      </style>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 {font-family: 'Open Sans', sans-serif;} class="centertext">Peter J. Rhodes <small> /*Junior Software Developer*/</small></h1>
      </div>
    </div> 
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 centertext"><strong>email: </strong>peter@peterrhodes.net</div>
      <div class="col-md-1"></div>
      <div class="col-md-3 centertext"><strong>twitter: </strong>@petrov82</div>
      <div class="col-md-1"></div>
      <div class="col-md-3 centertext"><strong>linkedin: </strong><a href="http://www.linkedin.com/in/peterrhodes"></a>/in/peterrhodes</div>
      <div class="col-md-1"></div>
    </div>
    
    <hr>
      <div class="row">
        <h4><strong>Education:</strong></h4>
          <div class="col-md-10">
            <strong>CodeUp Web Development bootcamp &nbsp;-&nbsp; Linux, Apache, MySQL, PHP, HTML, CSS, and JavaScript </strong>
          </div>
          <div class="col-md-2">Completed Spring 2014</div>
          <div class="col-md-10">
             University of Texas at San Antonio&nbsp;-&nbsp; Bachelor of Arts in History
          </div>
          <div class="col-md-2"> Completed Winter 2010</div>
        </div>
      </div>
      <div class="row">
        <h4><strong>Skills:</strong></h4>
          <div class="col-md-10">
            <p>CodeUp Web Development bootcamp &nbsp;-&nbsp; Linux, Apache, MySQL, PHP, HTML, CSS, and JavaScript </p>
          </div>
          <div class="col-md-2">Completed Spring 2014</div>
          <div class="col-md-10">
             University of Texas at San Antonio&nbsp;-&nbsp; Bachelor of Arts in History
          </div>
          <div class="col-md-2"> Completed Winter 2010</div>
        </div>
      </div>
</div>

@stop
