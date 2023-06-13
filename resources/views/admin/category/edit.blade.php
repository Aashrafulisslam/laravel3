@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Category</h5>
                            </div>
                            <hr/>
                            <form action="{{ route('update_category') }}" method="post">
                                @csrf
                                <input type="hidden" value="{{ $category->id }}" name="ctg_id">
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Update Category Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ctg_name" class="form-control" id="inputEnterYourName" value="{{ $category->ctg_name }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Update Category</button>
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