@extends('layouts.dashboard',['name'=>'User'])
@section('content')
    <div class="container">
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
            @foreach ($managers as $managers)
            <tr>
                <td>{{ $managers->id }}</td>
                <td>{{ $managers->name }}</td>
                <td>{{ $managers->email }}</td>
                <td>{{ $managers->division->name }}</td>
                <td>{{ $managers->position->name }}</td>
                <td>
                    @foreach (App\Models\User::ROLE as $key => $role) 
                    @if ($managers->role == $key)
                        {{ $role }}
                    @endif
                   @endforeach
                </td>
                <td>
                    <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a href="{{ url('admin/managers/'.$managers->id.'/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{ route('managers.destroy',$managers->id) }}" method="POST">
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
