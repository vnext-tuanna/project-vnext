@extends('layouts.dashboard',['name'=>'Waiting Report'])

@section('content')
    <div class="container">
        <div class="btn-option">
          <a href="requests" class="btn btn-sm btn-danger" >Back</a>
        </div>
        <table
            id="example"
            class="table table-striped table-bordered dt-responsive nowrap"
            style="width: 100%"
        >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Content</th>
                    <th>From_user</th>
                    <th>To_user</th>
                    <th>Start_date</th>
                    <th>End_date</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($wRequests as $wRequests)
              <tr>
                <td>{{ $wRequests->id }}</td>
                <td>{{ $wRequests->type }}</td>
                <td>
                  <p>
                    {{ $wRequests->content }}
                  </p>
                <a href="# " id="myBtn" data-toggle="modal" data-target="#staticBackdrop">Chi tiết</a>
                <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Content</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        {{ $wRequests->content }}
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
                <td>Edinburgh</td>
                <td>Sơn</td>
                <td>{{ $wRequests->start_date }}</td>
                <td>{{ $wRequests->end_date }}</td>
                <td>
                    <a href="{{ url('admin/deny',$wRequests->id) }}"><i class="box-icon fas fa-times" style="color: red"></i></a>
                    <a href="{{ url('admin/approve',$wRequests->id) }}"><i class="box-icon fas fa-check"></i></a>
                </td>
            </tr>
              @endforeach
               
            </tbody>
        </table>
    </div>
@endsection
