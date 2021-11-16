@extends('layouts.dashboard',['name'=>'Create User'])
@section('content')
    <div class="container">

        <form action="{{ route('users.store') }}" method="post">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            @if (Auth::guard('manager')->user()->role == 1)
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <select class="form-select form-select-sm" name='role' aria-label=".form-select-sm example">
                        @foreach (App\Models\User::ROLE as $key => $role)
                            <option value="{{ $key }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div>
            @else
                <div class="mb-3 disable">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <select class="form-select form-select-sm" name='role' aria-label=".form-select-sm example">
                        @foreach (App\Models\User::ROLE as $key => $role)
                            <option value="{{ $key }}">{{ $role }}</option>
                        @endforeach
                    </select>
                </div>
            @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Division</label>
                <select class="form-select form-select-sm" name='division' aria-label=".form-select-sm example">
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}" selected>{{ $division->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Position</label>
                <select class="form-select form-select-sm" name='position' aria-label=".form-select-sm example">
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}" selected>{{ $position->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Skill</label><br>
                <select class="js-example-basic-multiple" name="skill[]" multiple="multiple">
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}"> {{ $skill->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/users" type="submit" class="btn btn-danger">Cancel</a>
        </form>

    </div>
@endsection
