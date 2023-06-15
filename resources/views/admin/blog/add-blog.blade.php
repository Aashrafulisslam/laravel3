@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Blog</h5>
                            </div>
                            <hr/>
                            <form action="{{route('new.blog')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select name="category_id" id="" class="form-control">
                                            @foreach($categories as $category)
                                             <option value="{{$category->id}}">{{$category->category_name}}</option>
                                            @endforeach
                                        </select>
    
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Author</label>
                                    <div class="col-sm-9">
                                        <select name="author_id" id="" class="form-control">
                                            @foreach($authors as $author)
                                            <option value="{{$author->id}}">{{$author->author_name}}</option>
                                            @endforeach
                                        </select>
    
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" id="title" class="form-control">
    
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="slug" class="col-sm-3 col-form-label">Slug</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="slug" id="slug" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-sm-3 col-form-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea name="description" class="form-control" id="description" cols="20" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image"  class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <input type="file" name="image" id="image" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="date"  class="col-sm-3 col-form-label">Date</label>
                                    <div class="col-sm-9">
                                        <input type="date" name="date" id="date" class="form-control">
                                    </div>
                                </div>
    
                                <div class="row mb-3">
                                    <label for="blogType" class="col-sm-3 col-form-label">Blog Type</label>
                                    <div class="col-sm-9">
                                        <select name="blog_type" id="blogType" class="form-control">
                                            <option value="popular">Popular</option>
                                            <option value="trending">Trending</option>
                                            <option value="latest">Latest</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="status" class="col-sm-3 col-form-label">Status</label>
                                    <div class="col-sm-9">
                                        <input type="radio" name="status" value="1"> Published &nbsp;
                                        <input type="radio" name="status" value="2"> Unpublished
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection