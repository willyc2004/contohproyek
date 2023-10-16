@extends('layouts.template')

@section('layout_content')
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Project</th>
                <th scope="col">Semester</th>
                <th scope="col">Project</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $pro)
                @if ($loop->even)
                    @php($semester = 'Even')
                @else
                    @php($semester = 'Odd')
                @endif
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td><a href="project/{{ $pro['code'] }}">
                        {{ $pro['title'] }}</a></td>
                    
                    <td>{{ $semester }}</td>
                    <td>{{ $pro['course'] }}</td>
                    <td>
                        @if ($loop->first)
                            My very First Project
                        @elseif ($loop->last)
                            My Last Project
                        @else
                            Lorem ipsum dolor sit amet
                        @endif
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
