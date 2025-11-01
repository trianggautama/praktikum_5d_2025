@extends('layouts.app')
@section('content')
    <div class="m-4">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h4>Selamat datang {{Auth::user()->nama}}</h4>
                <p class="m-0">Email : {{Auth::user()->email}}</p>
                <p class="m-0">Username : {{Auth::user()->username}}</p>
            </div>
        </div>
    </div>
@endsection