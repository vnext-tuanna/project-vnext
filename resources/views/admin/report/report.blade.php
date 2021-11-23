@extends('layouts.dashboard',['name'=>'Report'])

@section('content')
    <div class="container">
        <div class="btn-option">
            @if (session('msg'))
                <p class="text-danger">{{ session('msg') }}</p>
            @endif
        </div>
        <form action="{{ route('reportByDate') }}" class="p-3" method="POST">
            @csrf
            <div class="form-row">
                <div class="row">
                    <h3 class="text-center">Filter request by date</h3>
                    <div class="col">
                        <label for="">From</label>
                        <input type="date" class="form-control" placeholder="First name" name="start" >
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
            <a href="{{ route('reports.index') }}" class="btn btn-success">Report All</a>
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Report By Month
                </button>
                <ul class="dropdown-menu">
                    @for($i = 1; $i <= 12; $i++)
                        <li><a class="dropdown-item" href="{{ route('reportByMonth',$i) }}">Month {{ $i }}</a></li>
                    @endfor
                </ul>
            </div>
            <a href="{{ route('reportbyWeek') }}" class="btn btn-warning" style="color: white;">Report By Week</a>
        </div>
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width: 100%">
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
                            <p class="text_content">
                                {{ strip_tags($report->description) }}
                            </p>
                            <a href="{{ $report->id }}" id="details" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $report->id }}">
                                Details
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop{{ $report->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="content_request">{{ $report->description }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $report->created_at }}</td>
                        <td style="padding-top: 20px;">
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
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
