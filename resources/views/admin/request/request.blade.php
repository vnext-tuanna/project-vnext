@extends('layouts.dashboard',['name'=>'Request'])

@section('content')
    <div class="container">
      <div class="btn-option">
        <a href="waiting" class="btn btn-sm btn-primary">Waiting List</a>
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
                </tr>
            </thead>
            <tbody>
              @foreach ($requests as $requests)
              <tr>
                <td>{{ $requests->id }}</td>
                <td>{{ $requests->type }}</td>
                <td>
                    <p>
                      {{ $requests->content }}
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
                            {{ $requests->content }}
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                <td>{{ $requests->user->name }}</td>
                <td>{{ $requests->user->to_user_id }}</td>
                <td>{{ $requests->start_date }}</td>
                <td>{{ $requests->end_date }}</td>
            </tr>
              @endforeach
               
            </tbody>
        </table>
    </div>
@endsection
