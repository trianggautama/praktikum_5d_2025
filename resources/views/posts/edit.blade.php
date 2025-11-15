@extends('layouts.app')
@section('content')
    <div class="m-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Edit Post
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('posts.update',$post->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mt-3">
                    <label for="">Title</label>
                    <input type="text" class="form-control" placeholder="Enter Title Post" name="title" value="{{$post->title}}">
                    @error('title')
                        <small class="text-danger"> {{$message}}</small>
                    @enderror
                </div>
                <div class="mt-3">
                    <label for="">Body</label>
                    <textarea type="text" class="form-control" placeholder="Enter Post Content" name="body" >{{$post->body}}</textarea>
                    @error('body')
                        <small class="text-danger"> {{$message}}</small>
                    @enderror
                </div>
                <div class="float-end mt-3">
                    <a href="{{route('dashboard')}}" class="btn btn-secondary"> Kembali</a>
                    <button type="submit" class="btn btn-primary"> Update Post</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection