@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bg-dark rounded text-center text-white p-3 h1 col-11 mb-5 mx-auto">Welcome To My Website</div>
        <div class="row justify-content-around d-flex justify-between-center align-items-center">
            <a href="{{route("items.index")}}" class="col-md-5 text-decoration-none">

                <div class="bg-primary rounded text-white d-flex justify-content-between align-items-center px-3">
                    <h1>Items</h1>
                    <i class="bi bi-box2-fill" style="font-size: 100px"></i>

                </div>
            </a>

            <a href="{{route("group.index")}}" class="col-md-5 text-decoration-none text-dark">
                <div class="bg-warning rounded d-flex justify-content-between align-items-center px-3">
                    <h1>Groups</h1>
                    <i class="bi bi-tags-fill" style="font-size: 100px"></i>
                </div>
            </a>
        </div>
    </div>
@endsection
