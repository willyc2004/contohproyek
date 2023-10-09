@extends('layouts.template')


@section('layout_content')
@php
        $menus = [
            [
                'nama_menu' => 'Nasi Goreng',
                'harga' => 25000,
                'tipe_menu' => 'Makanan',
            ],
            [
                'nama_menu' => 'Mie Ayam',
                'harga' => 20000,
                'tipe_menu' => 'Makanan',
            ],
            [
                'nama_menu' => 'Es Teh Manis',
                'harga' => 5000,
                'tipe_menu' => 'Minuman',
            ],
            [
                'nama_menu' => 'Ayam Bakar',
                'harga' => 30000,
                'tipe_menu' => 'Makanan',
            ],
            [
                'nama_menu' => 'Es Jeruk',
                'harga' => 6000,
                'tipe_menu' => 'Minuman',
            ],
            [
                'nama_menu' => 'Nasi Padang',
                'harga' => 28000,
                'tipe_menu' => 'Makanan',
            ],
            [
                'nama_menu' => 'Teh Hangat',
                'harga' => 4000,
                'tipe_menu' => 'Minuman',
            ],
            [
                'nama_menu' => 'Sate Ayam',
                'harga' => 30000,
                'tipe_menu' => 'Makanan',
            ],
            [
                'nama_menu' => 'Jus Alpukat',
                'harga' => 8000,
                'tipe_menu' => 'Minuman',
            ],
            [
                'nama_menu' => 'Soto Ayam',
                'harga' => 22000,
                'tipe_menu' => 'Makanan',
            ],
        ];
    @endphp
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Menu</th>
                <th scope="col">Harga</th>
                <th scope="col">Tipe Menu</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php ($i = 0)
            @foreach ($menus as $menu)
            @php ($i++)
            <tr>
                <td>{{ $i }}</td>
                <td> {{ $menu['nama_menu'] }} </td>
                <td>{{ $menu['harga'] }}</td>
                <td>{{ $menu['tipe_menu'] }}</td>
                <td><button class="btn btn-warning">Update</button><button class="btn btn-danger">Delete</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
