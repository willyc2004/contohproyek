@extends('layouts.template')

@section('layout_content')
    @if ($shop->shop_image)
        <img src="{{ asset('storage/' . $shop['shop_image']) }}" class="d-block rounded-3 object-fit-cover" width="200"
            height="180">
    @else
        <img src="{{ asset('images/gaada.png') }}" class="d-block rounded-3 object-fit-cover" width="200" height="180">
    @endif

    <h2>Shop Name : {{ $shop['shop_name'] }}</h2>
    <h2>Shop Address : {{ $shop['shop_address'] }}</h2>
@endsection
