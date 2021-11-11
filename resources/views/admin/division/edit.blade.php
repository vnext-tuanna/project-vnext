@extends('layouts.dashboard',['name'=>'Edit Division'])
@section('content')
    <div class="container">
        <form action="{{url('admin/divisions/'.$divisions->id)}}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Division Name</label>
              <input type="text" class="form-control" name="name" value="{{ $divisions->name }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection