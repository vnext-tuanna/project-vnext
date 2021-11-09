@extends('layouts.app')

@section('content')
    <div class="section__request">
        <div class="request__header row">
            <div class="col-md-6">
                <h3>Your request</h3>
            </div>
            <div class="col-md-6 row justify-content-between ">
                <a href="{{route('request.add')}}" class="btn col-4 text-white" style="background-color: #10ac84">Create request</a>
                <button href="" class="btn  col-3 text-white" id="requestMoth" style="background-color: #40739e">Request by month</button>
                <button href="" class="btn col-4 text-white" id="requestWeek"  style="background-color: #40739e" >Request by day</button>
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
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Leave out</td>
                        <td>Lorem11</td>
                        <td>quyennv@vnext.com.vn</td>
                        <td><span class="text-white px-2 rounded-3 bg-dark">pending</span></td>
                        <td>08/11/2021</td>
                        <td>
                            <a href="" class="btn"><i class="bi bi-eye text-primary"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Leave early</td>
                        <td>Lorem11</td>
                        <td>quyennv@vnext.com.vn</td>
                        <td><span class="text-white px-2 rounded-3 bg-danger">reject</span></td>
                        <td>08/11/2021</td>
                        <td>
                            <a href="" class="btn"><i class="bi bi-eye text-primary"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>In leave</td>
                        <td>Lorem11</td>
                        <td>quyennv@vnext.com.vn</td>
                        <td><span class="text-white px-2 rounded-3 bg-success">approved</span></td>
                        <td>08/11/2021</td>
                        <td>
                            <a href="" class="btn"><i class="bi bi-eye text-primary"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->

@endsection
