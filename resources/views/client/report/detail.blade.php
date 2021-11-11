@extends('layouts.app')
@section('content')
    <div class="section__report">
        <div class="report__body p-3 rounded-3" style="background-color: #f1f2f6">
            <div class="report__head">
                <div class="d-flex justify-content-between">
                    <div class="right">
                        <h4>Report Detail</h4>
                    </div>
                    <div class="left">
                        <a href="{{route('report.edit', [$report->id])}}" class="btn text-white" style="background-color: #1e90ff">Update</a>
                    </div>
                </div>
            </div>
            <div class="report_content mt-3" >
                <div class=" d-flex justify-content-between mt-5">
                    <h2>{{$report->title}}</h2>
                    <span class="text-muted">{{date_format($report->created_at, 'd/m/Y')}}</span>
                </div>
                <p class="mt-3" style="text-align: justify">{{strip_tags($report->description)}}</p>
            </div>
        </div>
    </div>
@endsection
