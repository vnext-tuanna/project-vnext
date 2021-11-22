@extends('layouts.app')

@section('content')
    <div class="section__report p-3">
        <div class="report__head d-flex justify-content-between">
            <h4>Change password</h4>
            <a href="{{route('user.index')}}" class="btn btn-primary">Back</a>
        </div>
        <hr>
        <form action="" method="POST"  id="addForm" enctype="multipart/form-data">
            @if(Session::get('msg'))
                <p class="text-center p-3 bg-success text-white">Change password success</p>
            @endif
            @csrf
            <div class="form-group mt-3">
                <label for="">Recent password</label>
                <input type="password" class="form-control" name="current">
                @error('current')
                <p class="text-danger mt-3"> {{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">New password</label>
                <input type="password" class="form-control" name="new">
                @error('new')
                <p class="text-danger mt-3"> {{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Confirm password</label>
                <input type="password" class="form-control" name="confirm">
                @error('confirm')
                <p class="text-danger mt-3"> {{$message}}</p>
                @enderror
            </div>
            <button type="submit" class=" mt-3 btn btn-success">Change password</button>
        </form>
    </div>
@endsection
