@extends('layouts.template')

@section('layout_content')
    <div class="container mt-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.shop.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Shop name</label>
                <input type="text" class="form-control" id="title" name="shop_name" placeholder="Shop Name">
            </div>

            <div class="mb-3">
                <label for="synopsis" class="form-label">Address</label>
                <textarea class="form-control" id="synopsis" name="shop_address" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="shop_image" class="form-label">Shop Image</label>
                <img id="shop_image_preview" class="img-preview img-fluid mb-3 col-sm-5" src="">
                <input class="form-control" type="file" name="shop_image" accept="image/jpg, image/png, image/jpeg"
                    onchange="previewImage()">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('input[name="shop_image"]');
            const imgPreview = document.querySelector('#shop_image_preview');

            imgPreview.style.display = 'block';

            const offReader = new FileReader();
            offReader.readAsDataURL(image.files[0]);

            offReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>


@endsection
