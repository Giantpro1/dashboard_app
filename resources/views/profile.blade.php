@extends('layout.app')

@section('title', 'profile')

@section('contents')


<form action="" method="post">

    <div class="row">
        <div class="col-md-12">

            <div class="col-md-6">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}" id="">
            </div>
            <div class="col-md-6 mt-2">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="{{auth()->user()->email}}" id="">
            </div>

            <div class="col-md-6 mt-2">
                <label for="">Phone</label>
                <input type="text" name="email" class="form-control" value="{{auth()->user()->phone}}" id="">
            </div>
            {{-- <div class="col-md-6 mt-2">
                <label for="">Phone</label>
                <input type="text" name="email" class="form-control" value="{{auth()->user()->phone}}" id="">
            </div> --}}

            <div class="text-right">
                <button class="btn btn-primary profile-button px-5 mb-4" type="submit">Save</button>
            </div>
        </div>
    </div>
</form>
@endsection
