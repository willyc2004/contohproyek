@extends('layouts.template')

@section('maintitle', 'Project')
@section('pagetitle', 'Detail Project')

@section('layout_content')
        <div class = "mt-4 p-5 bg-primary text-white rounded">
            <h1>{{$pro['title'] }}</h1>
            <p>Course: {{ $pro['course'] }}</p>
            <p>Code: {{ $pro['code'] }}</p>
        </div>
@endsection
