@extends('layout.app')

@section('title', 'Edit Product')

@section('contents')

    <h1 class="mb-0">Details Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        <div class="row">
            @csrf
            @method('PUT')
            {{-- <div class="col-md-12"> --}}

            <div class="col-md-6">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $product->title }}" id="">
            </div>
            <div class="col-md-6 mt-2">
                <label for="">prices</label>
                <input type="text" name="price" class="form-control" value="{{ $product->price }}" id="">
            </div>

            <div class="col-md-6 mt-2">
                <label for="">Product_code</label>
                <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}"
                    id="">
            </div>
            <div class="col-md-6 mt-2">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="2">{{ $product->description }}</textarea>
            </div>
            {{-- <div class="col-md-6 mt-2 mb-3">
            <label for="">Date Created</label>
            <input type="text" name="product_code" class="form-control" value="{{$product->created_at}}"   id="">
        </div> --}}

            <div class="text-right">
                <button class="btn btn-warning profile-button px-5 mb-4" type="submit">Update</button>
            </div>
            {{-- </div> --}}
        </div>
    </form>
@endsection
