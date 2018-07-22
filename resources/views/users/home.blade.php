@extends('users.layouts.main_skeleton')
@php($name = Auth::user()->first_name." ".Auth::user()->last_name)
@section('title',$name." | Home")
@include('users.layouts.navbar')
@section('content')

@endsection