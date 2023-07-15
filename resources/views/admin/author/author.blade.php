@extends('admin.master')

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-xl-9 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-4 rounded">
                            <div class="card-title d-flex align-items-center">
                                <h5 class="mb-0">Add Auhtor</h5>
                            </div>
                            <hr/>
                            <form action="{{ route('author.store') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputEnterYourName" class="col-sm-3 col-form-label">Enter Author Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="author_name" class="form-control" id="inputEnterYourName" placeholder="Enter Author Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-3 col-form-label"></label>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary px-5">Add Author</button>
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
                                <h5 class="mb-0">Author List</h5>
                            </div>
                            <hr/>
                            <table class="table table-striped table-bordered table-hover">
                                <tr>
                                    <th>Sl</th>
                                    <th>Auhtor Name</th>
                                    <th>Action</th>
                                </tr>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($authors as $author)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $author->author_name }}</td>
                                    <td>                                    
                                        <form action="{{ route('author.destroy', $author->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="author_id" value="{{ $author->id }}">
                                            <button type="submit" onclick="return confirm('Delete?')" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
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