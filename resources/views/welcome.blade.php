
@extends('common.layout')
@section('content')
<ul>
    <li><a href="{{route('contact')}}">Contact</a></li>
    <li><a href="{{url('about')}}">About</a></li>
    <li><a href="{{url('contact-info')}}">Contact Info</a></li>
</ul>
@endsection
