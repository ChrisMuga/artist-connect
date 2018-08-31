@extends('users.layouts.main_skeleton')
@section('title','TypeAhead')
@section('content')

<div class="container">
    <input class="form-control my-2" id="search" placeholder="Search"/> 
</div>

<script>


//typeahead js

//typeahead js
var data;

//fetch data
fetch('fetch')
  .then(function(response) {
    return response.json();
  })
  .then(function(myJson) {

    console.log(myJson);
   
    $('#search').typeahead(null, {
    name: 'data',
    display: 'name',
    source: myJson,
    templates: {
      
                  empty:        [
                                    '<div class="empty-message">',
                                      'unable to find any Best Picture winners that match the current query',
                                    '</div>'
                                ].join('\n'),

                  suggestion:   Handlebars.compile('<div><strong>'+myJson.name+'</strong> – '+myJson.capital+'</div>')
                }
});
    
  });

  
</script>
@endsection