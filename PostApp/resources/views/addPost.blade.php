@extends('layouts.frontendLayouts')

@section('title','Add Post')

@section('content')

<section>
    <div class="container">
        <div class="card col-lg-5 mx-auto mt-5">
            <div class="card-header">
                Add Post
            </div>
            <div class="card-body">

                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <input name="title" type="text" placeholder="Post Title" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror

                    <input name="detail" type="text" placeholder="Post Detail" class="form-control mb-2">
                    @error('detail')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror

                    <input name="author" type="text" placeholder="Author Name" class="form-control mb-2">
                    @error('author')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror

                    <button class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection