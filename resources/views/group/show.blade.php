@extends('layouts.app')

@section('content')
    

<form action="{{ route('items.store') }}" method="post" class="mb-10">
    @csrf

    <div class="container d-flex flex-column bg-dark gap-3 p-5 rounded">
        <div>
            <label class="text-white" for="title">Title: </label>
            <input id="title" name="title" type="text" class="form-control">
        </div>
        <div>
            <label class="text-white" for="description">Description: </label>
            <input id="description" name="description" type="text" class="form-control">
        </div>
        <div>
            <label class="text-white" for="price">Price: </label>
            <input id="price" name="price" type="string" class="form-control">
        </div>
        <div>
            <label class="text-white" for="quantity">Quantity: </label>
            <input id="quantity" name="quantity" type="number" class="form-control">
        </div>
        <div>
            <label class="text-white" for="group">Group: </label>
            <select disabled name="group_id" class="form-control" id="">
                <option selected value="{{$group->id}}">{{$group->title}}</option>
            </select>
            <input type="text" name="group_id" value="{{$group->id}}" hidden>
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
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Group</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($group->items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td><a href="{{route("group.show", ["group" => $item->group->id])}}">{{ $item->group->title }}</a></td>
                    <td class="d-flex justify-content-center gap-2">
                        <a class="btn btn-warning" href="{{ route('items.edit', ['item' => $item->id]) }}"><i
                                class="bi bi-pencil-square"></i></a>
                        <form action="{{ route('items.destroy', ['item' => $item->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
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