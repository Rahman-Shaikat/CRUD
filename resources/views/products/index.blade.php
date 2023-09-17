@extends('master')
@section('title')
    Home
@endsection
@section('content')
    <section class="py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div><h1>Product Manage Form</h1></div>
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Code</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    @foreach($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->name }}</td>
                        {{-- <td><img src="{{asset($students->image)}}" style="height: 50px; width: 50px" alt=""></td> --}}
                        {{-- <td>
                            <a href="{{route('sessions.edit',$session->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{route('session.wise.student',$session->id)}}" class="btn btn-success btn-sm">Session Wise Student</a>
                            <form action="{{ route('sessions.destroy',$session->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you want to delete this!!')">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
        </div>
    </section>

    @endsection
