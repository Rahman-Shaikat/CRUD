@extends('master')
@section('title')
    Create
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">Product Create Form</div>
                        <div class="card-body">
                            <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
                                @csrf

        
                                <div class="mb-3">
                                    <label class="form-label">Category Name</label>
                                    <select name="category_id" class="form-control">
                                        <option>Please Select a Category</option>

                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Product Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Product Code</label>
                                    <input type="text" name="code" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="text" name="price" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                   <input type="file" name="image" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

