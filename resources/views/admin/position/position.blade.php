@extends('layouts.dashboard',['name'=>'Position'])
@section('content')
    <div class="container">
        <div class="btn-option">
            <a href="positions/create" class="btn btn-sm btn-primary">Create Position</a>
            @if (session('msg'))
                <p class="text-danger">{{ session('msg') }}</p>
            @endif
        </div>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($positions as $position)
                    <tr>
                        <td>{{ $position->id }}</td>
                        <td>{{ $position->name }}</td>
                        <td>
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <a href="{{ url('admin/positions/' . $position->id . '/edit') }}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <form action="{{ route('positions.destroy', $position->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')"
                                            class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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
