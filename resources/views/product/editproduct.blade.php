@extends('layout.template')
@section('css', '/css/editproduct.css')
@section('title', 'Edit Product')

@section('content')
<div class="edit-product-body-container">
    <div class="edit-product-body-content">
        <div class="col">
            <div class="row">
                <h1 class="edit-product-title">Edit Current Product</h1>
            </div>
            <div class="row">
                <form action="{{ route('product_edit', $product->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-item">
                        <input type="text" name="name" id="name" placeholder="Input New Name" autocomplete="off" value="{{ $product->name }}">
                    </div>
                    <div class="form-item">
                        <textarea name="description" id="description" cols="30" rows="10"
                                  placeholder="Input New Description" autocomplete="off"></textarea>
                    </div>
                    <div class="form-item">
                        <input type="number" name="price" id="price" placeholder="Input New Price" autocomplete="off" value="{{ $product->price }}">
                    </div>
                    <div class="form-item">
                        <input type="number" name="year" id="year" placeholder="Input New Year" autocomplete="off" value="{{ $product->year }}">
                    </div>
                    <div class="form-item">
                        <label for="existing-image"></label>
                        <input type="file" name="image" id="image">
                    </div>
                    <button class="edit-product-button" type="submit">Edit Product</button>
                    @if($errors->any())
                        <div class="alert alert-danger my-2 p-3">
                            <ul>
                                @foreach($errors->all() as $error_data)
                                    <li> {{ $error_data }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
