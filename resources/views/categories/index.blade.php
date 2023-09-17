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
                        <th scope="col">{{ $loop->iteration }}</th>
                        <th scope="col">{{ $category->name }}</th>
                        <th scope="col">Action</th>
                    </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>
        </div>
    </section>

    @endsection
