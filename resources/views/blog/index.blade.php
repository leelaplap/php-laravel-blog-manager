@extends('layouts.app')
@section('content')
    <div class="container ">
        <div class="col-12 col-md-12 d-flex justify-content-center">
            <div class="row">
                <form class="form-inline my-2 my-lg-0" action="{{route('blog.search')}}" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <button class="hide">Hide</button>
                <button class="show" value="false">Show</button>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="hide-name">Name</th>
                        <th scope="col">category</th>
                        <th scope="col">date</th>
                        <th><a href="{{route('blog.formAdd')}}">Thêm</a></th>
                    </tr>
                    </thead>
                    @foreach($blogs as $key =>$blog)
                        <tr>
                            <td class="bg-primary">{{++$key}}</td>
                            <td class="bg-success hide-name">{{$blog->name}}</td>
                            <td class="bg-danger">{{$blog->category}}</td>
                            <td class="bg-info">{{$blog->date}}</td>
                            <td class="bg-warning"><a href="{{route('blog.delete',$blog->id )}}">del</a>|
                                <a href="{{route('blog.edit',$blog->id)}}">edit</a>|
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{$blogs->links()}}
            </div>
        </div>
    </div>

@endsection
