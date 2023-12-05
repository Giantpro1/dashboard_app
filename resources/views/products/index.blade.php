@extends('layout.app')

@section('title', 'Home Products')

@section('contents')

    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    {{-- <th>S/N</th> --}}
                    <th>Title</th>
                    <th>Price</th>
                    <th>Product Code</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>+
                @if ($product->count() > 0)
                    @foreach ($product as $values)
                        <tr>
                            {{-- <td>{{$loop->interation}}</td> --}}
                            <td>{{$values->title}}</td>
                            <td>{{$values->price}}</td>
                            <td>{{$values->product_code}}</td>
                            <td>{{$values->description}}</td>
                            <td>
                                <div class="btn-group" role="group" >
                                    <a href="{{ route('products.show', $values->id)}}" type="button" class="btn btn-secondary">Details</a>
                                    <a href="{{ route('products.edit', $values->id)}}" type="button" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('products.destroy', $values->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    {{-- <a href="" >Deletes</a> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Product Not Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection
