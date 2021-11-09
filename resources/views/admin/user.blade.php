@extends('layouts.dashboard')
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
            <tr>
                <td>Tiger1</td>
                <td>Nixon</td>
                <td>Edinburgh</td>
                <td>Edinburgh</td>
                <td>Edinburgh</td>
                <td>Edinburgh</td>
                <td>
                    <a href="#">Deny</a>
                    <a href="#">Approve</a>
                </td>
            </tr>
        </tbody>
        </table>
        
    </div>
@endsection
