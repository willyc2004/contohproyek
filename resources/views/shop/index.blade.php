@extends('layouts.template')

@section('layout_content')
    <form action="/shop" Imethod="GET" class="form-inline w-25 d-flex gap-2">
        <input class="form-control" type="search" name="search" placeholder="Search">
        <button type="submit" class="btn btn-outline-success">Search</button>
    </form>
    <hr>
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Shop Name</th>
                <th scope="col">Shop Address</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
                <tr>
                    <td>{{ $shop->id }}</td>
                    <td>{{ $shop->shop_name }}</td>
                    <td>{{ $shop->shop_address }}</td>
                    <td>{{ $shop->created_at }}</td>
                    <td>{{ $shop->updated_at }}</td>
                    <td>
                        <button class='btn btn-danger' id='delete' name='delete'>Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <br>
    <div>
        {{ $shops->links() }}
    </div>
@endsection
