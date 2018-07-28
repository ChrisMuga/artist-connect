@extends('users.layouts.main_skeleton')
@php($name = Auth::user()->first_name . " " . Auth::user()->last_name)
@php($namex = $user->first_name." ". $user->last_name)
@section('title',$namex."'s Profile")
<div class="container">
    @section('content')
        <div class="row" >
            {{-- posts --}}
            <div class="col-md-10">
                <h1 class="text-danger text-right" style="font-weight: bold; text-transform:uppercase;">{{$namex}}'s posts <span class="badge badge-primary">{{count($posts)}}</span></h1>
                <hr/>
                
                    <div class="row my-1">
                        @php($c = 1)
                        @foreach($posts as $post)
                            {{-- post --}}
                            <div class="col-md-6 my-2 border-left border-dark border-4">
                                    
                               <span class="badge badge-danger">{{$c}}</span>
                                          
                                <blockquote class="blockquote text-right">
                                    <p class="mb-0">{{$post->post}}</p>
                                    <footer class="blockquote-footer"> {{$namex}} <cite title="Source Title"><span class="badge badge-warning">{{$post->created_at}}</span></cite></footer>
                                </blockquote>
                            </div>
                            {{-- post --}}
                            @php( $c += 1)
                        @endforeach
                    </div>
                    
            </div>
            {{-- posts --}}

            {{-- user --}}
            <div class="col-md-2" style="background:url('img/profile-pictures/{{$user->id}}.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height:30vh; ">
                
            </div>
            {{-- user --}}

        </div>
    @endsection
</div>