@extends('layouts.app')

@section('content')
    

<form action="{{route("group.update", ["group" => $group->id])}}" method="post" class="mb-10">
    @csrf
    @method("PATCH")
    <div class="container d-flex flex-column bg-dark gap-3 p-5 rounded">
        <div>
            <label class="text-white" for="title">Title: </label>
            <input id="title" name="title" type="text" class="form-control" value="{{$group->title}}">
        </div>
        <script>
            Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
        </script>
        <button class="btn btn-success">Update</button>
    </div>

</form>

 

@endsection