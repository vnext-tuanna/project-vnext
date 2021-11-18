@extends('layouts.dashboard',['name'=>'Requests'])

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
                    <p id = "text_content">
                      {{ $requests->content }}
                    </p>
                        <a href="{{ $requests->id }}" id="details" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $requests->id }}">
                          Details
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{ $requests->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Content</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p class="content_request">{{ $requests->content }}</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </td>
                <td>{{ $requests->user->name }}</td>
                <td>{{ $requests->manager->name }}</td>
                <td>{{ $requests->start_date }}</td>
                <td>{{ $requests->end_date }}</td>
            </tr>
              @endforeach

            </tbody>
        </table>
    </div>
@endsection
