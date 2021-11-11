@extends('layouts.dashboard',['name'=>'User'])
@section('content')
    <div class="container">
        <div class="btn-option">
            <a href="users/create" class="btn btn-sm btn-primary">Create User</a>
        </div>
        <table
            id="example"
            class="table table-striped table-bordered dt-responsive nowrap"
            style="width: 100%"
        >
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Division</th>
                <th>Position</th>
                <th>Role</th>
                <td>Option</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $users)
            <tr>
                <td>{{ $users->id }}</td>
                <td>{{ $users->name }}</td>
                <td>{{ $users->email }}</td>
                <td>{{ $users->division->name }}</td>
                <td>{{ $users->position->name }}</td>
                <td>
                    @foreach (App\Models\User::ROLE as $key => $role) 
                    @if ($users->role == $key)
                        {{ $role }}
                    @endif
                   @endforeach
                </td>
                <td>
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="{{ url('admin/users/'.$users->id.'/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{ route('users.destroy',$users->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                            </form>
                        </li>             
                      </ul>
                </td>
            </tr>
            @endforeach
            
        </tbody>
        </table>
        
    </div>
@endsection
