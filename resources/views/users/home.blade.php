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
    {{-- col --}}
    <div class="col-md-4">
        <span class="badge badge-primary my-2">People</span>
        <br/>

        {{-- loop --}}
        @foreach ($users as $user)

            {{-- row --}}
            <div class="row my-1">

                {{-- col --}}
                <div class="col-md-4 d-flex justify-content-center">
                    <img src='img/profile-pictures/{{$user->id}}.jpg' alt="Image" class="profile-pic"/> 
                </div>
                {{-- col --}}

                {{-- col --}}
                <div class="col-md-8">
                    <a class="badge badge-danger" href="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</a>
                    <br/>
                    <a class="badge badge-secondary" href="#">{{$user->email_address}}</a>
                </div>
                {{-- col --}}

            </div>
            {{-- row --}}

        @endforeach
        {{-- loop --}}

    </div>
    {{-- col --}}

    {{-- col --}}
    <div class="col-md-8">
        <span class="badge badge-danger my-2">Posts</span>
        <br/>
        @foreach($posts as $post)
            {{-- row --}}
            <div class="row">
                {{-- col --}}
                <div class="col-md-2" style="background:url('img/profile-pictures/{{$post->user_id}}.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; ">
                    
                </div>
                {{-- col --}}
                {{-- col --}}
                <div class="col-md-10">
                    <p>
                        {{-- search name --}}
                        @foreach($users as $user)

                            @if($user->id == $post->user_id)
                            
                                 <a href="{{$user->id}}" class="badge badge-danger">{{$user->first_name}} {{$user->last_name}}</a>
                            @endif
                            
                        @endforeach
                        {{-- search name --}}
                        <p>{{$post->post}}</p>
                        <hr/>
                       
                        {{-- search name --}}
                        @foreach($users as $user)

                            @if($user->id == $post->user_id)
                            
                               
                                <span class="badge badge-primary">{{$user->email_address}}</span>

                            @endif
                            
                        @endforeach
                        {{-- search name --}}

                       

                     
                      
                    </p>
                    
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
            <hr/>
        @endforeach
    </div>
    {{-- col --}}
</div>
{{-- row --}}

@endsection