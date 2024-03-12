@extends('backend.dashboard')

@section('content')
    
 <section>
    <div class="container">
       <div class="row">
        @if (Route::is('category') )
            <div class="col-lg-4">
                <div class="card mt-5 shadow">
                    <div class="card-header bg-primary text-white">
                        Add Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.insert') }}" method="POST">
                            @csrf
                            <label for="category">Category Name :</label>
                            <input name="category" type="text" id="category" class="form-control my-2" placeholder="Enter the category">
                            @error('category')
                                <span class="text-danger mb-2">{{ $message }} </span>
                            @enderror
                            <select name="category_id" id="categoryId" class="form-control my-3">
                                <option selected disabled>Select a parent category</option>
                                @foreach ($categories as $category)
                                    
                                <option value="{{ $category->id }}">{{ $category->category }}</option>

                                @endforeach
                            </select>
                            <button class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="col-lg-4">
                <div class="card mt-5 shadow">
                    <div class="card-header bg-primary text-white">
                        Edit Category
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $categoryEdit->id ) }}" method="POST">
                            @csrf
                            @method('Put')
                            <label for="category">Category Name :</label>
                            <input value="{{ $categoryEdit->category }}" name="category" type="text" id="category" class="form-control my-2" placeholder="Enter the category">
                            <select name="category_id" id="categoryId" class="form-control my-3">
                                <option selected disabled>Select a parent category</option>
                                @foreach ($categories as $category)
                                    
                                <option value="{{ $category->id }}">{{ $category->category }}</option>

                                @endforeach
                            </select>
                            <button class="btn btn-primary w-100">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        
        <div class="col-lg-8">
            <div class="table-responsive mt-5">
                <table class="table table-striped table-hover text-center shadow ">

                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Category_slug</th>
                        <th>Action</th>
                    </tr>
                    @forelse ($parentCategories as $key=>$category)
                        <tr>
                            <td>{{ $categories->firstItem()+ $key }}</td>
                            <td> {{ $category->category }} </td>
                            <td> {{ $category->category_slug }} </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="{{ route('category.delete', $category->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>

                            @if ($category->subcategories)

                                @foreach ($category->subcategories as $subcategory)
                                    
                                    <tr>
                                        <td>---</td>
                                        <td> {{ $subcategory->category }} </td>
                                        <td> {{ $subcategory->category_slug }} </td>
                                        <td>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                
                            @endif
                            
                        
                    @empty
                        
                            <td colspan="4">
                                <h4 class="bg-warning py-2">No Data Found 😞</h4>
                            </td>
                            {{-- shaown --}}
                        </tr>
                        
                       
                    @endforelse
                    
                    
                </table>
                {{ $categories->links() }}
            </div>
        </div>
        
       </div>
    </div>
 </section>

@endsection