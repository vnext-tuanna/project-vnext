@extends('layouts.app')
@section('content')
    <div class="section__report">
        <div class="report__body p-3 rounded-3" style="background-color: #f1f2f6">
            <div class="report__head">
                <div class="d-flex justify-content-between">
                    <div class="right">
                        <h4>Report List</h4>
                    </div>
                    <div class="left">
                        <a href="{{ route('report.create') }}" class="btn text-white" style="background-color: #1a202c">Add report</a>
                    </div>
                </div>
            </div>
            <div class="report_content mt-3" style="background-color: #FFFFFF">
                <table class="table table-borderless ">
                    <thead>
                    <tr>
                        <th class="p-0 min-w-150px"></th>
                        <th class="p-0 min-w-50px"></th>
                        <th class="p-0 min-w-50px"></th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($reports as $key => $report)
                          <tr style="border-bottom: 3px solid #f1f2f6">
                              <td class="pl-0">
                                  <h4 href="#" class="text-dark-75 font-weight-bolder mb-1 font-size-lg text-dark">{{$report->title}}</h4>
                                  <span style="text-align: justify" class="text-muted font-weight-bold d-block">{{strip_tags(Str::limit($report->description,100))}}</span>
                              </td>
                              <td class="text-right">
                                  <span  class="text-muted mt-3 font-weight-bold d-block">{{date_format($report->created_at, 'd/m/Y')}}</span>
                              </td>
                              <td class="text-right d-flex justify-content-between flex-column">
                                  <a href="{{route('report.show', [$report->id])}}" style="color:#2f3542 "><i class="bi bi-eye"></i></a>
                                  <a href="{{route('report.edit', [$report->id])}}" style="color: #5352ed"><i class="bi bi-pencil-square"></i></a>
                              </td>
                          </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
