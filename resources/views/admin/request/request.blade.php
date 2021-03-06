@extends('layouts.dashboard',['name'=>'Requests'])

@section('content')
    <div class="container">
        <div class="btn-option ">
            @if (Auth::guard('manager')->user()->role == 2)
                <a href="waiting" class="btn btn-sm btn-primary">Waiting List<span class="badge badge-pill badge-danger"
                        style="
                        background:#dc3545;
                        border-radius: 50%;
                        margin-left: 5px;
                    ">{{ $count }}</span></a>
            @else
                <a href="waiting" class="btn btn-sm btn-primary">Waiting List</a>
            @endif

            @if (session('msg'))
                <p class="text-danger">{{ session('msg') }}</p>
            @endif
        </div>
        <form action="{{ route('requestByDate') }}" class="p-3" method="POST">
            @csrf
            <div class="form-row">
                <div class="row">
                    <h3 class="text-center">Filter request by date</h3>
                    <div class="col">
                        <label for="">From</label>
                        <input type="date" class="form-control" placeholder="First name" name="start">
                    </div>
                    <div class="col">
                        <label for="">To</label>
                        <input type="date" class="form-control" placeholder="Last name" name="end">
                    </div>
                    <div class="submit py-3 float-end">
                        <button type="submit" style="float: right;" class="btn btn-primary px-5">Submit</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-md-12 col-xs-12 col-lg-12 d-flex justify-content-end" style="display: inline !important;">
            <a href="{{ route('requests.index') }}" class="btn btn-success">Request All</a>
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Request By Month
                </button>
                <ul class="dropdown-menu">
                    @for ($i = 1; $i <= 12; $i++)
                        <li><a class="dropdown-item" href="{{ route('requestByMonth', $i) }}">Month
                                {{ $i }}</a></li>
                    @endfor
                </ul>
            </div>
        </div>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Content</th>
                    <th>From_user</th>
                    <th>To_manager</th>
                    <th>Start_date</th>
                    <th>End_date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $requests)
                    <tr>
                        <td>{{ $requests->id }}</td>
                        <td>{{ $requests->type == 1 ? 'In Leave' : ($requests->type == 2 ? 'Leave Out' : 'Leave Early') }}
                        </td>
                        <td>
                            <p class="text_content">
                                {{ $requests->content }}
                            </p>
                            <a href="{{ $requests->id }}" id="details" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $requests->id }}">
                                Details
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{ $requests->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Content</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="content_request">{{ $requests->content }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
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
