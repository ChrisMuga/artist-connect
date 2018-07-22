@extends('users.layouts.main_skeleton')
@if( Auth::check() )

    @php($name = Auth::user()->first_name." ".Auth::user()->last_name)
    @section('title',$name." | Home")
@else
    @section('title',"Home")
@endif

@section('content')

{{-- row --}}
<div class="row">
    <div class="col-md-4">
        <span class="badge badge-primary">People</span>

        {{-- loop --}}
        @foreach ($users as $user)

            {{-- row --}}
            <div class="row my-1">

                {{-- col --}}
                <div class="col-md-4 d-flex justify-content-center">
                    <img src="img/pic.jpg" alt="Image" class="profile-pic"/> 
                </div>
                {{-- col --}}

                {{-- col --}}
                <div class="col-md-8">
                    <a class="badge badge-danger" href="#">{{$user->first_name}} {{$user->last_name}}</a>
                </div>
                {{-- col --}}

            </div>
            {{-- row --}}

        @endforeach
        {{-- loop --}}

    </div>
</div>
{{-- row --}}

@endsection