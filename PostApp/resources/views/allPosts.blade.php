@extends('layouts.frontendLayouts')

@section('title','All Posts')

@section('content')

<section>
    <div class="container">
        <div class="table-responsive mt-5 text-center">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Detail</th>
                    <th>Author</th>
                    <th>Edit</th>
                </tr>
                @foreach ($posts as $key=>$post)
                    
                <tr>
                    <td>{{ $posts->firstItem() + $key }}</td>
                    <td>{{ $post->title }} </td>
                    <td>{{ str($post->detail)->substr(0,5)->lower. '...'  }}</td>
                    <td>{{ $post->author }}</td>
                    <td>
                        <div class="btn-group">
                          <a href="{{ route('edit',$post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                          <a href="{{ route('delete', $post->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </td>

                </tr>
                @endforeach

            </table>

            {{ $posts->links() }}

            
        </div>
    </div>
</section>

@endsection