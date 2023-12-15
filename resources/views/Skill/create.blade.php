@extends('base')

@section('content')

<h1>Create Skill</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('skills/create')}}" method="POST">
            @csrf
            <div class="form-group mt-2 m-100">
                <label for="name">Name</label>
                <input type="text" name="name" id="" class="form-control">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="description">Description</label>
                <input type="text" name="description" id="" class="form-control">
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="type">Type</label>
                <input type="text" name="type" id="" class="form-control">
                @error('type')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Add Skill</button>
            </div>
        </form>
    </div>
</div>
@endsection