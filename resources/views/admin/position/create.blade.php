@extends('layouts.dashboard',['name'=>'Create Position'])
@section('content')
    <div class="container">
        <form action="{{ route('positions.store') }}" method="post">
            @method('POST')
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Position Name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection