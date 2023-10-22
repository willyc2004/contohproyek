@extends('layouts.template')

@section('layout_content')
    <img src="{{ asset('images/' . $writer['image_name']) }}" class="d-block rounded-3 object-fit-cover" width="200"
        height="180">

        <h2>Name : {{ $writer['name'] }}</h2>
        <h2>Contact : {{ $writer['contact'] }}</h2>
@endsection
