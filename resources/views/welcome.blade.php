@extends('layouts.app')
@section('content')
<div class="row margin-auto justify-content-center">
    <div class="m-4 col-md-8 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    Login User
                </div>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="username">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="float-end mt-3">
                        <a href="{{route('register')}}">Belum punya akun ?, daftar disini.</a>
                        <button type="submit" class="btn btn-primary"> Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection