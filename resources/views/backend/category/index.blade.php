@extends('backend.dashboard')
@section('title','manage category')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Manage Category</h2>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->status==1?'Published':'Unpublished'}}</td>
                                        <td>
                                            <img src="{{asset($category->image)}}" alt="" style="height: 80px;">
                                        </td>
                                        <td>
                                            <a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-outline-primary">edit</a>
                                            <a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-outline-danger">delete</a>
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
    </section>
@endsection
