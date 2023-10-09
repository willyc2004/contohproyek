@extends('layouts.template')

@section('layout_content')
    <h2>Please Contact Us</h2>
    <table class="table">
        <thead>
            <tr class="table-dark">
                <th scope="col">No</th>
                <th scope="col">Project</th>
                <th scope="col">Semester</th>
                <th scope="col">Description</th>
            </tr>
            @php ($projects = ['Calculator','Accounting','Student Report','POS Resto','Online Store','Pet Shop'])
        </thead>
        <tbody>
            @php ($i = 0)
            @foreach ($projects as $pro)
            @php($i++)
                @if ($i % 2 == 0)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $pro }}</td>
                        <td>Even</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime reiciendis placeat non deserunt
                            tempore vel illo ratione deleniti nesciunt nobis cumque sit, perferendis accusantium
                            necessitatibus
                            provident pariatur cum fugit repudiandae!</td>
                    </tr>
                @else
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $pro }}</td>
                        <td>Odd</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime reiciendis placeat non deserunt
                            tempore vel illo ratione deleniti nesciunt nobis cumque sit, perferendis accusantium
                            necessitatibus
                            provident pariatur cum fugit repudiandae!</td>
                    </tr>
                @endif
            @endforeach

        </tbody>
    </table>
@endsection
