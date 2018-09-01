@extends('users.layouts.main_skeleton')
@section('title','TypeAhead')
@section('content')

<div class="container">
  <div id="scrollable-dropdown-menu"><input class="typeahead" id="search"/></div>
</div>


	<script>
    
    		var bloodhound = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.whitespace,
				queryTokenizer: Bloodhound.tokenizers.whitespace,
				// remote: {
				// 	url: '/fetch',
				// 	wildcard: '%QUERY%'
				// },
        		prefetch: 'fetch'
			});
			
			$('#search').typeahead(
				{
					hint:		true,
					highlight: 	true,
					minLength: 	1
				}, 
				
				{

					name:		'name',
					
					source:		bloodhound,

					display:	function(data) 
								{
									return data.name  //Input value to be set when you select a suggestion. 
								},

					templates: 


					{
						empty:			[
											'<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
										],

						header: 		[
											'<div class="list-group search-results-dropdown">'
										],

						suggestion: 	function(data) 

										{
											console.log(data);
											console.log(typeof(data))
											console.log(data.name);
											return '<a href="https://www.google.com"><div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data + '</div></div></a>'
										}
					}


				}
			);
      
	</script>
@endsection