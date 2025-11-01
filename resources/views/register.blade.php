@extends('layouts.app')
@section('content')
    <div class="m-4">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    Register User
                </div>
                <form action="{{route('registerStore')}}" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="username">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                        @error('nama')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="username">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        @error('email')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                        @error('username')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group mt-3">
                        <label for="username">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        @error('password')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="float-end mt-3">
                        <a href="/">sudah punya akun ?, login sekarang.</a>
                        <button type="submit" class="btn btn-primary"> Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection