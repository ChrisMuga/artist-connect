@extends('users.layouts.main_skeleton')
@section('title','TypeAhead')
@section('content')

<div class="container">
    <input class="form-control my-2 typeahead" id="search" placeholder="Search"/> 
</div>

<script>
var data;

//fetch data
fetch('fetch')
  .then(function(response) 
  {
    return response.json();
  })
  .then(function(myJson) 
  
  {
    
      data  = myJson[0].name;
      console.log(data);
   
  });

  
</script>
@endsection