@extends('layouts.template')


@section('layout_content')

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
