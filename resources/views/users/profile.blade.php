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
   <div class="col-md-2 border-right border-left">
        <div style="background:url('img/profile-pictures/{{Auth::user()->id}}.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; " class="profile-pic-1"></div>
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
            <div class="jumbotron" style='background:url("img/profile-pictures/{{$user->id}}.jpg"); background-size: cover; background-position: center; background-repeat: no-repeat;'>
                <div style="background:black; padding:20px; opacity:0.7;">
                    <h1 class="display-4" style="color:white"><span style="background:black; opacity:0.8; padding:10px;" >{{$name}}</span></h1>
                    <br/>
                    <p class="text-success"><span style="background:black; opacity:0.8; padding:10px;" >{{$user_details->bio}}</span</p>
                    <hr class="my-4">
                    <span class="badge badge-danger">{{$user_details->nationality}}</span>
                    <span class="badge badge-secondary">{{$user_details->location}}</span>
                    <hr/>
                    <a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#exampleModal">Share Something</a>
                </div>
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
                    <input type="text" class="form-control" name="nationality" placeholder="Nationality"
                    @if( !empty( $user_details ) )
                            value="{{$user_details->nationality}}"
                    @endif
                    
                    required/>
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
                    <input type="text" class="form-control" name="location" placeholder="Location"
                    @if( !empty( $user_details ) )
                            value="{{$user_details->location}}"
                    @endif
                    
                    required/>
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
                    <input type="text" class="form-control" name="gender" placeholder="Gender"
                    @if( !empty( $user_details ) )
                        value="{{$user_details->gender}}"
                    @endif
                    
                    required/>
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
                    <textarea type="text" class="form-control text-left" name="bio" placeholder="Bio..." rows="7"
                    @if( !empty( $user_details ) )
                            value="{{$user_details->bio}}"
                    @endif
                    
                    required/>
                        @if( !empty( $user_details ) )
                            {{$user_details->bio}}
                        @endif
                    </textarea>
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

{{-- modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pen-fancy"></i> Say Something</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="post" method="POST">

            {{csrf_field()}}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}"/>
            
            <div class="modal-body">
                <textarea rows="8" class="form-control text-danger" placeholder="Share something..." name="post"></textarea>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-danger" >Post</button>
            <button type="reset" class="btn btn-primary" data-dismiss="modal">Clear</button>
            </div>
        </form>

      </div>
    </div>
  </div>

{{-- modal --}}

@endsection