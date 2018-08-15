@extends('users.layouts.main_skeleton')
@section('title','TypeAhead')
@section('content')
<div class="row my-2 d-flex justify-content-center">
    <div class="col-md-8">
        <div class="alert alert-danger">
            <h4>TypeAhead</h4>
        </div>
        <input type="text" class="form-control search-input" placeholder="Search" name="search"/>
    </div>
</div>
{{-- js --}}
<script>
    $(".search-input").typeahead(
                                    {
                                    hint: true, 
                                    highlight: true,
                                    minLength: 1
                                    }, 

                                    ["Chris Muga","Tom Onyango","Ryan Giggs"]
                                
                                    );
</script>
{{-- js --}}
@endsection