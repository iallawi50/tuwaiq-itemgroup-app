@extends('layouts.app')

@section('content')
    

<form action="{{route("items.update", ["item" => $item->id])}}" method="post" class="mb-10">
    @csrf
    @method("PATCH")
    <div class="container d-flex flex-column bg-dark gap-3 p-5 rounded">
        <div>
            <label class="text-white" for="title">Title: </label>
            <input id="title" name="title" type="text" class="form-control" value="{{$item->title}}">
        </div>
        <div>
            <label class="text-white" for="description">Description: </label>
            <input id="description" name="description" type="text" class="form-control" value="{{$item->description}}">
        </div>
        <div>
            <label class="text-white" for="price">Price: </label>
            <input id="price" name="price" type="string" class="form-control" value="{{$item->price}}">
        </div>
        <div>
            <label class="text-white" for="quantity">Quantity: </label>
            <input id="quantity" name="quantity" type="text" class="form-control" value="{{$item->quantity}}">
        </div>
        <div>
            <label class="text-white" for="group">Group: </label>
            <select name="group_id" class="form-control" id="">
            <option disabled selected>Please Choose Group</option>
            @foreach ($groups as $group)
                <option  {{$group->id == $item->group->id ? "selected" : ''}} value="{{$group->id}}">{{$group->title}}</option>
            @endforeach
            </select>
        </div>
        <button class="btn btn-success">Update</button>
    </div>

</form>

 

@endsection