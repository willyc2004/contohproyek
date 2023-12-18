@extends('layouts.template')

@section('layout_content')
    <form action="shop" Imethod="GET" class="form-inline w-25 d-flex gap-2">
        <input class="form-control" type="search" name="search" placeholder="Search">
        <button type="submit" class="btn btn-outline-success">Search</button>
    </form>
    <div class="text-end">
        <div class="btn-group" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group me-2" role="group" aria-label="Basic Example">
                <form method="GET" action="{{ route('admin.shop.create') }}">
                    <button class="btn btn-primary" href="{{ route('admin.shop.create') }}">
                        Tambah
                    </button>
                </form>
            </div>
        </div>
    </div>

    <hr>

    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Shop Name</th>
                <th scope="col">Shop Address</th>
                <th scope="col">Shop Image</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $shop)
                <tr>
                    <td>{{ $shop->id }}</td>
                    <td><a href="{{ route('admin.shop.show', $shop) }}">{{ $shop->shop_name }}</a></td>
                    <td>{{ $shop->shop_address }}</td>
                    <td>
                        @if ($shop->shop_image)
                            <img src="{{ asset('storage/' . $shop->shop_image) }}" class="rounded-3 object-fit-cover"
                                width="200" height="180">
                        @else
                            <img src="{{ asset('images/gaada.png') }}" class="rounded-3 object-fit-cover" width="200"
                                height="180">
                        @endif
                    </td>
                    <td>{{ $shop->created_at }}</td>
                    <td>{{ $shop->updated_at }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.shop.edit', $shop) }}" id="edit"
                            name="edit">Edit</a>

                        <form action="{{ route('admin.shop.destroy', $shop) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger" id="delete" name="delete">Delete</button>
                        </form>
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
