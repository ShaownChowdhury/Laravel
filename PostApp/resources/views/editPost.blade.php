@extends('layouts.frontendLayouts')

@section('title','Add Post')

@section('content')

<section>
    <div class="container">
        <div class="card col-lg-5 mx-auto mt-5">
            <div class="card-header">
                Edit Post
            </div>
            <div class="card-body">
 
            
               
                <form action="{{ route('update', $post->id) }}" method="POST">


                    @csrf
                    @method('PUT')
                    
                    <input value="{{ $post->title }}" name="title" type="text" placeholder="Post Title" class="form-control mb-2">
                    @error('title')
                        <span class="text-danger">{{ $message }} </span>
                    @enderror

                    <input value="{{ $post->detail }}" name="detail" type="text" placeholder="Post Detail" class="form-control mb-2">
                    @error('detail')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror
                  
                    {{-- <textarea class="form-control mb-2" name="area" placeholder="area">{{ old('area') }}</textarea> --}}
                    
                    <input value="{{ $post->author }}" name="author" type="text" placeholder="Author Name" class="form-control mb-2">
                    @error('author')
                    <span class="text-danger">{{ $message }} </span>
                    @enderror

                    <button class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
</section>

@endsection