@extends('layout.app')

@section('title', 'profile')

@section('contents')


<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">

    <div class="row">
        @csrf
        {{-- <div class="col-md-12"> --}}

            <div class="col-md-6">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control"  id="">
            </div>
            <div class="col-md-6 mt-2">
                <label for="">prices</label>
                <input type="text" name="price" class="form-control" id="">
            </div>

            <div class="col-md-6 mt-2">
                <label for="">Product_code</label>
                <input type="text" name="product_code" class="form-control"  id="">
            </div>
            <div class="col-md-6 mt-2">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="5"></textarea>
            </div>

            <div class="text-right">
                <button class="btn btn-primary profile-button px-5 mb-4" type="submit">Save</button>
            </div>
        {{-- </div> --}}
    </div>
</form>
@endsection
