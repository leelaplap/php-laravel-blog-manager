@extends('layouts.app')
@section('content')
    <form method="post" action="{{route('blog.add')}}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label>category</label>
            <input type="text" class="form-control" name="category">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
