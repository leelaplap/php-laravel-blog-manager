@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">category</th>
            <th scope="col">date</th>
            <th><a href="{{route('blog.formAdd')}}">Thêm</a></th>
        </tr>
        </thead>
        @foreach($blogs as $key =>$blog)
            <tr>
                <td class="bg-primary">{{++$key}}</td>
                <td class="bg-success">{{$blog->name}}</td>
                <td class="bg-danger">{{$blog->category}}</td>
                <td class="bg-info">{{$blog->date}}</td>
                <td class="bg-warning"><a href="{{route('blog.delete',$blog->id )}}">del</a>|
                    <a href="{{route('blog.edit',$blog->id)}}">edit</a>|</td>
            </tr>
        @endforeach
    </table>
    {{$blogs->links()}}
@endsection
