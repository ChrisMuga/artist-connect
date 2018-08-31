@extends('users.layouts.main_skeleton')
@section('title','TypeAhead')
@section('content')

<div class="container">
    <input class="form-control my-2 typeahead" id="search" placeholder="Search"/> 
</div>

<script>
var data;


  var countries = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  // url points to a json file that contains an array of country names, see
  // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
  prefetch: 'fetch'
});

console.log(countries);

$('#search').typeahead(null, {
  name: 'countries',
  source: countries,
  templates: {
    empty: [
      '<div class="empty-message">',
        'unable to find any Best Picture winners that match the current query',
      '</div>'
    ].join('\n'),
    suggestion: Handlebars.compile('<div><strong>'+countries.name+'</strong></div>')
  }
});

  
</script>
@endsection