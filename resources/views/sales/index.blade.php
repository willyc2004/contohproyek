@extends('layouts.template')

@section('layout_content')
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Shop Name</th>
                <th scope="col">Book Title</th>
                <th scope="col">User Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sales as $sale)
                <tr>
                    <td>{{ $sale->id }}</td>
                    <td>{{ $sale->seller->shop_name }}</td>
                    <td>{{ $sale->sold->title }}</td>
                    <td>{{ $sale->buyer->name }}</td>
                    <td>{{ $sale->created_at }}</td>
                    <td>{{ $sale->updated_at }}</td>
                    <td>
                        <button class='btn btn-danger' id='delete' name='delete'>Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
