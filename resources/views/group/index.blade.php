@extends('layouts.app')

@section('content')
    

<form action="{{ route("group.store")}}" method="post" class="mb-10">
    @csrf

    <div class="container d-flex flex-column bg-dark gap-3 p-5 rounded">
        <div>
            <label class="text-white" for="title">Title: </label>
            <input id="title" name="title" type="text" class="form-control">
        </div>
        <button class="btn btn-success">Save</button>
    </div>

</form>


<div class="mt-5 container text-center">
    <table class="table table-bordered align-middle">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($groups as $group)
            <tr>
                <td>{{$group->id}}</td>
                <td><a href="{{route("group.show", ["group" => $group->id])}}">{{ $group->title }}</a></td>
                <td class="d-flex justify-content-center gap-2">
                    <a class="btn btn-warning" href="{{ route("group.edit",["group" => $group->id])}}"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route("group.destroy",["group" => $group->id])}}" method="POST">
                        @csrf
                        @method("DELETE")
                    <button onclick="return confirm('Are you sure ?')" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i>
                </button>
            </form>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>


@endsection