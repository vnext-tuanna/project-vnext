@extends('layouts.dashboard',['name'=>'Dashboard'])

@section('content')
<div class="overview-boxes">
    <div class="box">
        <div class="right-side">
            <div class="box-topic">Total Report</div>
            <div class="number">{{ $reports }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    <div class="box">
        <div class="right-side">
            <div class="box-topic">Total Report</div>
            <div class="number">{{ $requests }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    <div class="box">
        <div class="right-side">
            <div class="box-topic">Total Division</div>
            <div class="number">{{ $divisions }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    <div class="box">
        <div class="right-side">
            <div class="box-topic">Total Position</div>
            <div class="number">{{ $positions }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    
</div>
@endsection
