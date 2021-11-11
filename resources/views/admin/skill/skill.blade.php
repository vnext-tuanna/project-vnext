@extends('layouts.dashboard',['name'=>'Skill'])
@section('content')
    <div class="container">
        <div class="btn-option">
            <a href="skills/create" class="btn btn-sm btn-primary">Create Skill</a>
        </div>
        <table
            id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skills)
                <tr>
                    <td>{{ $skills->id }}</td>
                    <td>{{ $skills->name }}</td>
                    <td>
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                                <a href="{{ url('admin/skills/'.$skills->id.'/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                            </li>
                            <li class="list-inline-item">
                              <form action="{{ route('skills.destroy',$skills->id) }}" method="POST">
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
