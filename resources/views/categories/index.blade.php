@extends('master')
@section('title')
    Home
@endsection
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div><h1>Category Manage Form</h1></div>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @foreach ($categories as $category)
                    <tr>
                        <td scope="col">{{ $loop->iteration }}</td>
                        <td scope="col">{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you want to delete this!!')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>
        </div>
    </section>

    @endsection
