@extends('base')

@section('content')

<h1>Create Characters</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('characters/create')}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="skill_id">Select skills</label>
                <select name="skill_id" id="skill_id" class="form-select">
                    @foreach ($skills as $skillId => $skill)
                    <option value="{{$skillId}}">{{$skill}}</option>
                        
                    @endforeach
                </select>
                @error('skill_id')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="appearance">Appearance</label>    
                <input type="text" name="appearance" id="appearance" class="form-control">
                @error('appearance')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="personality">Personality</label>    
                <input type="text" name="personality" id="personality" class="form-control">
                @error('personality')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="name">Name</label>    
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-me-end">
                <button class="btn btn-primary mt-2" type="submit">Add Character</button>
            </div>
        </form>
    </div>
</div>
@endsection