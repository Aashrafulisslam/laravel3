@extends('admin.master')

@section('content')
<h1 class="text-capitalize">Welcome {{auth()->user()->name}}</h1>
@endsection