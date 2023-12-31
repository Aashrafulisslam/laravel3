@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 mx-auto">
        <h2 class="text-center">Manage Blog</h2>
        <hr />
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>sl</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Author Name</th>
                                <th>Category Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Blog Type</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $i=1 @endphp
                        <tbody>
                            @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ substr($blog->title,0,10) }}</td>
                                <td>{{substr($blog->slug,0,10)}}</td>
                                <td>{{$blog->ctg_name}}</td>
                                <td>{{$blog->author_name}}</td>
                                <td>{{substr($blog->description,0,20)}}</td>
                                <td>
                                    <img width="100" src="{{asset($blog->image)}}" alt="">
                                </td>
                                <td>{{$blog->date}}</td>
                                <td>{{$blog->blog_type}}</td>
                                <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href=" " class="px-2"><i class="fas fa-edit"></i></a>
                                    @if (auth()->user()->admin)
                                    <a href="" class="px-2"><i class="fa-solid fa-trash-can"></i></a>
                                    @if ($blog -> status == 1)
                                    <a href="{{ route('blog.status', ['id' => $blog->id]) }}" class="btn btn-success">Published</a>
                                    @else
                                    <a href="{{ route('blog.status', ['id' => $blog->id]) }}" class="btn btn-warning">Unpublished</a>
                                    @endif
                                    @endif

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection