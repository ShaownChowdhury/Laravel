@if ($subcategory->subcategories)
    @foreach ($subcategory->subcategories as $subcategory)

        <tr>
            <td> {{ str('⭕')->repeat($loop->depth) }} </td>
            <td>
                <div class="ms-{{ $loop->depth }}">
                 <img style="width: 40px" src="{{ $subcategory->icon? asset('storage/'.$subcategory->icon): asset('frontend/assets/images/icons/placeholder.jpg') }}"> {{ $subcategory->category }} 
                </div>
            </td>            
            <td> {{ $subcategory->category_slug }} </td>
            <td>
                <div class="btn-group">
                    <a href="{{ route('category.edit', $subcategory->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ route('category.delete', $subcategory->id) }}" class="btn btn-danger btn-sm">Delete</a>
                </div>
            </td>
        </tr>
        @include('layouts.components.CategoryConponent')
    @endforeach
@endif