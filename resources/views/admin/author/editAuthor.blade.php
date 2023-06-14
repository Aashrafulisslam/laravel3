@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Edit Author</h5>
                            </div>
                            <hr/>
                            <form action="{{ route('update_author') }}" method="post">
                                @csrf
                                <input type="hidden" name="author_id" value="{{ $author->id }}">
                                <div class="row mb-3">
                                    <label for="inputName" class="col-sm-3 col-form-label">Update Author Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="author_name" class="form-control" id="inputName" value="{{ $author->author_name }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Update Author</button>
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