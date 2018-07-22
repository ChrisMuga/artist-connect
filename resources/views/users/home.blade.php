@extends('users.layouts.main_skeleton')
@if(!empty(Auth::user()))
    @php($name = Auth::user()->first_name." ".Auth::user()->last_name)
    @section('title',$name." | Home")
@else
    @section('title',"Home")
@endif
@include('users.layouts.navbar')
@section('content')

@endsection