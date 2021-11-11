@extends('layouts.dashboard',['name'=>'Report'])

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
                    <th>Content</th>
                    <th>Time</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($reports as $report)
              <tr>
                <td>{{ $report->id }}</td>
                <td>{{ $report->user->name }}</td>
                <td>
                  <p>
                    {{ $report->content }}
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
                        <p>{{ $report->content }}</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                </td>
                <td>{{ $report->created_at }}</td>
                <td style="padding-top: 20px;">
                  <ul class="list-inline m-0">
                    <li class="list-inline-item">
                        <form action="{{ route('reports.destroy',$report->id) }}" method="POST">
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
