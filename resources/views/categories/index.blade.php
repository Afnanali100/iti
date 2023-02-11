@extends('main')
@section('content')
<a href="{{ route('category.create') }}" class="btn btn-primary p-1 m-3">create category</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>category name</th>
                <th>created_at</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }} </td>
                    <td>{{ $category->name }} </td>
                    <td>{{ $category->created_at }} </td>
                    <td>
                        <form action="{{ route('category.show', $category->id) }}">
                            <button type="submit">show</button>
                        </form>

                    <form action="{{ route('category.delete',$category->id) }}" method="post">
                    @method('delete')
                    @csrf
                       <button type="submit">delete</button>
                 </form>
                 <form action="{{ route('category.edit',$category->id) }}">
                  <button type="submit">edit</button>
                 </form>

                        {{--
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit">delete</button>
                        </form>

                        <form action="{{ route('products.edit', $product->id) }}">
                            <button type="submit">update</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection
{{-- migration --}}
{{-- seeders --}}
{{-- factory --}}
{{-- authentication --}}
