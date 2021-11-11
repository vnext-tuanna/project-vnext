@extends('layouts.dashboard',['name'=>'Edit Skill'])
@section('content')
    <div class="container">
        <form action="{{url('admin/skills/'.$skills[0]->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name Skill</label>
              <input type="text" class="form-control" name="name" value="{{ $skills[0]->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection