@extends('layouts.template')

@section('layout_content')
    @php
    $country = [];
    for ($j = 0; $j < count($writers); $j++) {
        if ($j + 1 == 1) {
            $country[$j] = 'Lebanon';
        } elseif ($j + 1 == count($writers)) {
            $country[$j] = 'Brunei';
        } elseif ($j + 1 == count($writers) / 2) {
            $country[$j] = 'Indonesia';
        } else {
            if (($j + 1) % 2 == 0) {
                $country[$j] = 'Prancis';
            } else {
                $country[$j] = 'Rusia';
            }
        }
    }
    @endphp

    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Country</th>
                <th scope="col">Description</th>
                <th scope="col">Contact</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i = 0;
            $k = 0;
            @endphp
            @foreach ($writers as $wr)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td><a href="/writer/{{ $wr['id'] }}">{{ $wr['name'] }}</a></td>
                    <td>{{ $country[$i] }}</td>
                    <td>
                        @if ($loop->first)
                            Urutan Teratas
                        @elseif ($loop->last)
                            Urutan Terbawah
                        @elseif ($loop->iteration == $loop->count / 2)
                            Urutan Tengah
                        @elseif ($loop->even)
                            Urutan Genap
                        @elseif ($loop->odd)
                            Urutan Ganjil
                        @endif 
                    </td>
                    <td>
                        {{ $wr['contact'] }}
                    </td>
                    <td>
                        <img src="{{ asset('images/'.$wr['image_name']) }}" class="rounded-3 object-fit-cover" width="200" height="180">
                    </td>
                </tr>
                @php
                $i++;
                @endphp
            @endforeach
        </tbody>
    </table>
@endsection
