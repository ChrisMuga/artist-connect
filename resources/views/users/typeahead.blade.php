@extends('users.layouts.main_skeleton')
@section('title','TypeAhead')
@section('content')

<div class="container">
    <input class="form-control my-2" id="search" placeholder="Search"/> 
</div>

<script>


//typeahead js

//typeahead js

fetch('fetch')
  .then(function(response) {
    return response.json();
  })
  .then(function(myJson) {

    console.log(myJson);
    
    //console.log(myJson[0])
    
  });
</script>
@endsection