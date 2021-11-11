@extends('layouts.dashboard',['name'=>'Edit Position'])
@section('content')
    <div class="container">
        <form action="{{url('admin/positions/'.$positions->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Position Name</label>
              <input type="text" class="form-control" name="name" value="{{ $positions->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection