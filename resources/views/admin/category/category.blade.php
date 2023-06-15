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
                            <form action="{{ route('add_category') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Category Name</label>
                                     <div class="col-sm-9">
                                        <input type="text" name="ctg_name" class="form-control" id="inputEnterYourName" placeholder="Enter Category Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Add Category</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Category Table</h5>
                            </div>
                            <hr/>
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th>Sl</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $category->ctg_name }}</td>
                                    <td>
                                        @if ($category -> status == 1)
                                            <a href="{{ route('status', ['id' => $category->id]) }}" class="btn btn-success">Published</a>
                                        @else
                                            <a href="{{ route('status', ['id' => $category->id]) }}" class="btn btn-warning">Unpublished</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit_ctg',['id' => $category->id]) }}" class="btn btn-primary">Edit</a>
                                        {{-- <a href="{{ route('delete'}}" class="btn btn-danger">Delete</a> --}}
                                        <form action="{{ route('delete_ctg') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="ctg_id" value="{{ $category->id }}">
                                            <button type="submit" onclick="return confirm('Delete?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td >
                                </tr>  
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection