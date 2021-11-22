@extends('layouts.app')

@section('content')
    <div class="section__request">
        <div class="request__header row">
            <form action="" class="p-3" method="POST">
                @csrf
                <div class="form-row">
                    <div class="row">
                        <h2 class="text-center">Filter request by day</h2>
                        <div class="col">
                            <label for="">From</label>
                            <input type="date" class="form-control" placeholder="First name" name="start" >
                        </div>
                        <div class="col">
                            <label for="">To</label>
                            <input type="date" class="form-control" placeholder="Last name" name="end">
                        </div>
                        <div class="submit py-3 float-end">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="col-md-3">
                <h3>Your request</h3>
            </div>
            <div class="col-md-9 row justify-content-between ">
                <a href="{{route('request')}}" class="btn col-2 text-white align-self-center" style="background-color: #1e3799">All request</a>
                <a href="{{route('request.add')}}" class="btn col-2 text-white" style="background-color: #10ac84">Create request</a>
                <div class="dropdown col-2">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Request by month
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        @for($i = 1; $i <= 12; $i++)
                            <a class="dropdown-item" href="{{route('request.month', $i)}}">Month {{$i}}</a>
                        @endfor
                    </div>
                </div>
                <a href="{{route('request.week')}}" class="btn col-2 text-white" id="requestWeek"  style="background-color: #40739e" >Request by week</a>
            </div>
        </div>
        <hr>

        <div class="request__content">
            <div class="request__moth">
                <table class="table table-striped text-center">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Content</th>
                        <th scope="col">Approver</th>
                        <th scope="col">Status</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">End Date</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>

                   @foreach($requests as $key => $request)
                       <tr>
                           <th scope="row">{{$requests->firstItem() + $key}}</th>
                           <td>{{$request->type == 1? 'In Leave' : ($request->type == 2? 'Leave Out' : 'Leave Early')}}</td>
                           <td>{{$request->content}}</td>
                           <td>{{$request->manager->name}}</td>
                           <td>
                               @if($request->status==0)
                                   <span class="text-white px-2 rounded-3 bg-dark">Pending</span>
                               @elseif($request->status==1)
                                   <span class="text-white px-2 rounded-3 bg-success">Accept</span>
                               @else
                                   <span class="text-white px-2 rounded-3 bg-danger">Reject</span>
                               @endif

                           </td>
                           <td>{{$request->start_date}}</td>
                           <td>{{$request->end_date}}</td>
                           <td>
                               @if($request->status == 0)
                                   <a href="{{route('request.edit', $request->id)}}"><i class="bi bi-pencil-square"></i></a>
                               @else
                                     <span>Can't edit</span>
                               @endif
                           </td>

                       </tr>
                   @endforeach
                    </tbody>
                </table>
                <div class="paginate d-flex justify-content-end">
                    {{$requests->links()}}
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->

@endsection
@push('footerScript')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" ></script>
@endpush
