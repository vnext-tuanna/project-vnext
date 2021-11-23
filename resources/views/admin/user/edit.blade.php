@extends('layouts.dashboard',['name'=>'Edit User'])
@section('content')
    <div class="container">
        <form action="{{ url('admin/users/'.$users->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="name" value="{{ $users->name }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Division</label>
                <select class="form-select form-select-sm" name='division' aria-label=".form-select-sm example">
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}"
                            <?= $users->division->id == $division->id ? 'selected' : '' ?>>{{ $division->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Position</label>
                <select class="form-select form-select-sm" name='position' aria-label=".form-select-sm example">
                    @foreach ($positions as $position)
                        <option value="{{ $position->id }}"
                            <?= $users->position->id == $position->id ? 'selected' : '' ?>>{{ $position->name }}</option>
                    @endforeach
                </select>
            </div>
            @if (Auth::guard('manager')->user()->role == 2)
                <div class="mb-3 disable">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <select class="form-select form-select-sm" name='role' aria-label=".form-select-sm example">
                        @foreach (App\Models\User::ROLE as $key => $role)
                            <option value="{{ $key }}" <?= $users->role == $key ? 'selected' : '' ?>>
                                {{ $role }}</option>
                        @endforeach
                    </select>
                </div>
            @else
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Role</label>
                    <select class="form-select form-select-sm" name='role' aria-label=".form-select-sm example">
                        @foreach (App\Models\User::ROLE as $key => $role)
                            <option value="{{ $key }}" <?= $users->role == $key ? 'selected' : '' ?>>
                                {{ $role }}</option>
                        @endforeach
                    </select>
                </div>
            @endif

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Skill</label><br>
                <select class="js-example-basic-multiple" name="skill[]" multiple="multiple">
                    @foreach ($skills as $skill)
                        <option value="{{ $skill->id }}" @foreach ($userskills as $userskill)
                            @if ($skill->id == $userskill->skill_id)
                                {{ 'selected' }}
                            @endif
                    @endforeach
                    > {{ $skill->name }}</option>
                    @endforeach
                </select>
                @error('skill')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/admin/users" type="submit" class="btn btn-danger">Cancel</a>
        </form>

    </div>
@endsection
