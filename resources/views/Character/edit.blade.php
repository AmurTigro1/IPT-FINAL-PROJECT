@extends('base')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  
  <!-- Modal -->
  <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteUserModalLabel">Delete User - {{$character->name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('characters/delete/'.$character->id)}}" method="POST">
            @csrf 
            @method('DELETE')
        <div class="modal-body">
          Are you sure you want to delete this character?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Delete character</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  
    <h1>Edit Character</h1>
    <div class="row">
        <div class="col-md-5">
            <form action="{{url('characters/'.$character->id)}}" method="POST">
            @csrf 
            <div class="form-group mt-2">
              <label for="skill_id">Skill ID </label>
              <input type="text" skill_id='skill_id' class='form-control' value='{{$character->skill_id}}'>
              @error('skill_id')
                  <p class='text-danger'>{{$message}}</p>
              @enderror
          </div>
            <div class="form-group mt-2">
                <label for="name">Name </label>
                <input type="text" name='name' class='form-control' value='{{$character->name}}'>
                @error('name')
                    <p class='text-danger'>{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="personality">Personality </label>
                <input type="text" name='personality' class='form-control' value='{{$character->personality}}'>
                @error('personality')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group mt-2">
                <label for="appearance"> appearance </label>
                <input type="text" name='appearance' class='form-control' value='{{$character->appearance}}'>
                @error('appearance')
                <p class='text-danger'>{{$message}}</p>
            @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteUserModal">
    Delete User
  </button>
                <button class="btn btn-primary">
                    Update User
                </button>
            </div>
            </form>
        </div>
    </div>
    @endsection