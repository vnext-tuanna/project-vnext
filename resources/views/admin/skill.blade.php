@extends('layouts.dashboard')
@section('content')
    <div class="container">
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
                <tr>
                    <td>Tiger1</td>
                    <td>Nixon</td>
                    <td>
                        <ul class="list-inline m-0">
                            <li class="list-inline-item">
                              <button class="btn btn-primary btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                            </li>
                            <li class="list-inline-item">
                              <button class="btn btn-secondary btn-sm rounded" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                            </li>             
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
