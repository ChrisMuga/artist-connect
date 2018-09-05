@extends('users.layouts.main_skeleton')
@section('title','TypeAhead')
@section('content')

<div class="container">

	{{-- row --}}
	<div class="row">

		<style>
			.x{width: 70vw;}
		</style>
		<div id="scrollable-dropdown-menu"><input class="typeahead form-control x" id="search"/></div>

	</div>
	{{-- row --}}

	{{-- row --}}
	<div class="row" id="app">

		<example-component></example-component>

	</div>
	{{-- row --}}
	
</div>


	<script>
    
    		var bloodhound = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.whitespace,
				queryTokenizer: Bloodhound.tokenizers.whitespace,
        		remote: {url: '/fetch'}
			});

			console.log(bloodhound);
			
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
											'<div class="list-group search-results-dropdown x"><div class="list-group-item">Nothing found.</div></div>'
										],

						header: 		[
											'<div class="list-group search-results-dropdown">'
										],

						suggestion: 	function(data) 

										{
											console.log(data);
											console.log(typeof(data))
											console.log(data.name);
											return '<div style="font-weight:normal; margin-top:-10px ! important;" class="list-group-item">' + data.name + ' - '+data.capital+'</div></div>'
										}
					}


				}
			);
      
	</script>
@endsection