@extends('users.layouts.main_skeleton')
@if( Auth::check() )

    @php($name = Auth::user()->first_name." ".Auth::user()->last_name)
    @section('title',$name." | Profile")
@else
    @section('title',"Home")
@endif

@section('content')

{{-- row --}}
<div class="row">
   {{-- col --}}
   <div class="col-md-4">
        <img src="img/pic.jpg" alt="Artist Connect" class="profile-pic"/>
        <span class="badge badge-danger">{{$name}}</span>
        <br/>
        <span class="badge badge-warning">{{Auth::user()->email_address}}</span>
   </div>
   {{-- col --}}
</div>
{{-- row --}}

@endsection