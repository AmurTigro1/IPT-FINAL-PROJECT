@extends('base')

@section('content')

<h1>Create Manhwa</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('manhwas/create')}}" method="POST">
            @csrf
            <div class="form-group mt-2 m-100">
                <label for="title">Title</label>
                <input type="text" name="title" id="" class="form-control">
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="synopsis">synopsis</label>
                <input type="text" name="synopsis" id="" class="form-control">
                @error('synopsis')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="genre">Genre</label>
                <input type="text" name="genre" id="" class="form-control">
                @error('genre')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">Add Manhwa</button>
            </div>
        </form>
    </div>
</div>
@endsection