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
   <div class="col-md-2 border-right">
        <img src="img/pic.jpg" alt="Artist Connect" class="profile-pic-1"/>
        <br>
        <span class="badge badge-danger">{{$name}}</span>
        <br/>
        <span class="badge badge-warning">{{Auth::user()->email_address}}</span>
   </div>
   {{-- col --}}

   {{-- col --}}

   <div class="col-md-10">
        @if( !empty($user_details) )
            {{-- jumbotron --}}
            <div class="jumbotron">
                <h1 class="display-4">{{$name}}</h1>
                <p class="lead">{{$user_details->bio}}</p>
                <hr class="my-4">
                <span class="badge badge-danger">{{$user_details->nationality}}</span>
                <span class="badge badge-secondary">{{$user_details->location}}</span>
                <hr/>
                <a class="btn btn-primary btn-lg" href="#" role="button">Share Something</a>
            </div>
            {{-- jumbotron --}}
        @endif

        {{-- row --}}
        <div class="row my-1">
            {{-- col --}}
            <div class="col-md-2">
                <label>First Name</label>
            </div>
            {{-- col --}}

            {{-- col --}}
            <div class="col-md-5">
                <input type="text" class="form-control" value="{{Auth::user()->first_name}}" readonly/>
            </div>
            {{-- col --}}


            {{-- col --}}
            <div class="col-md-5">
                <input type="text" class="form-control" value="{{Auth::user()->last_name}}" readonly/>
            </div>
            {{-- col --}}

        </div>
        {{-- row --}}

 
        {{-- row --}}
        <div class="row my-1">
            {{-- col --}}
            <div class="col-md-2">
                <label>Email</label>
            </div>
            {{-- col --}}

            {{-- col --}}
            <div class="col-md-10">
                <input type="text" class="form-control" value="{{Auth::user()->email_address}}" readonly/>
            </div>
            {{-- col --}}

        </div>
        {{-- row --}} 
        
        
        {{-- row --}}
        <div class="row my-1">
            {{-- col --}}
            <div class="col-md-2">
                <label>Phone</label>
            </div>
            {{-- col --}}

            {{-- col --}}
            <div class="col-md-10">
                <input type="text" class="form-control" value="{{Auth::user()->phone_number}}" readonly/>
            </div>
            {{-- col --}}

        </div>
        {{-- row --}} 

        <hr/>

        {{-- form --}}
        <form action="update_profile" method="POST">
            <input type="hidden" name="id" value="{{Auth::user()->email_address}}"/>
            {{csrf_field()}}
            {{-- row --}}
            <div class="row my-1">
                {{-- col --}}
                <div class="col-md-2">
                    <label>Nationality</label>
                </div>
                {{-- col --}}

                {{-- col --}}
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nationality" placeholder="Nationality" required/>
                </div>
                {{-- col --}}

            </div>
            {{-- row --}} 

            {{-- row --}}
            <div class="row my-1">
                {{-- col --}}
                <div class="col-md-2">
                    <label>Location</label>
                </div>
                {{-- col --}}

                {{-- col --}}
                <div class="col-md-10">
                    <input type="text" class="form-control" name="location" placeholder="Location" required/>
                </div>
                {{-- col --}}

            </div>
            {{-- row --}} 


            {{-- row --}}
            <div class="row my-1">
                {{-- col --}}
                <div class="col-md-2">
                    <label>Gender</label>
                </div>
                {{-- col --}}

                {{-- col --}}
                <div class="col-md-10">
                    <input type="text" class="form-control" name="gender" placeholder="Gender" required/>
                </div>
                {{-- col --}}

            </div>
            {{-- row --}} 

            <hr>

            {{-- row --}}
            <div class="row my-1">
                {{-- col --}}
                <div class="col-md-2">
                    <label>Bio</label>
                </div>
                {{-- col --}}

                {{-- col --}}
                <div class="col-md-10">
                    <textarea type="text" class="form-control" name="bio" placeholder="Bio..." rows="7" required/></textarea>
                </div>
                {{-- col --}}

            </div>
            {{-- row --}} 

            {{-- buttons --}}
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10 d-flex justify-content-center">
                    <button type="submit" class="form-control mx-2 btn btn-success">Enter</button>
                    <button type="reset" class="form-control mx-2 btn btn-secondary" >Clear</button>
                </div>
            </div>
            {{-- buttons --}}

    </form>
    {{-- form --}}
    
    

   </div>

   {{-- col --}}



</div>
{{-- row --}}

@endsection