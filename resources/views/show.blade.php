@extends('layouts.template')

@section('layout_content')
    <img src="{{ asset('images/' . $writer['image_name']) }}" class="d-block rounded-3 object-fit-cover" width="200"
        height="180">

    <h2>Name : {{ $writer['name'] }}</h2>
    <h2>Contact : {{ $writer['contact'] }}</h2>

    <h1>Books</h1>

    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Cover Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($writer->books as $book)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->synopsis}}</td>
                    <td>
                        <img src="{{ asset('images/'. $book->coverphoto) }}" class="rounded-3 object-fit-cover" width="200" height="180">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
