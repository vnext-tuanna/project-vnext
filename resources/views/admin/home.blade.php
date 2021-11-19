@extends('layouts.dashboard',['name'=>'Dashboard'])

@section('content')
<div class="overview-boxes">
    <div class="box">
        <div class="right-side">
            <div class="box__topic">Total Report</div>
            <div class="box__number">{{ $reports }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    <div class="box">
        <div class="right-side">
            <div class="box__topic">Total Request</div>
            <div class="box__number">{{ $requests }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    <div class="box">
        <div class="right-side">
            <div class="box__topic">Total Division</div>
            <div class="box__number">{{ $divisions }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    <div class="box">
        <div class="right-side">
            <div class="box__topic">Total Position</div>
            <div class="box__number">{{ $positions }}</div>
        </div>
        <i
            style="font-size: 2rem; padding-top: 1rem"
            class="fas fa-book"
        ></i>
    </div>
    
</div>
@endsection
