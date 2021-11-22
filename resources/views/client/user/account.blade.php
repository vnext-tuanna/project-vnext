@extends('layouts.app')

@section('content')
    <div class="section__user">
        <div class="section__user__content">
            <div class="content__head d-flex justify-content-between">
                <h4>User</h4>
                <a class="btn btn-primary" href="{{route('user.index')}}">Back</a>
            </div>
            <hr>
            <div class="content-body row">
                <div class="col-md-6 col-xl-3 ">
                    <div class="user-info-account p-3 d-flex align-items-center justify-content-center">
                        <div class="content__title ">
                            <div class="name d-flex ">
                                <div class="image__info">

                                    @if(Str::contains($user->image, 'images/user'))
                                        <img src="{{asset('storage/'. $user->image)}}" width="60px" height="60px"
                                             alt="">
                                    @else
                                        <img src="{{$user->image}}" width="60px" height="60px"
                                             alt="">
                                    @endif
                                </div>
                                <div class="main_info pl-4 ml-3" style="margin-left: 20px !important;">
                                    <h3 class=" fs-4 fw-bold">{{$user->name}}</h3>
                                    <span>{{$user->email}}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6  col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px; opacity: .5">{{$user->position->name}}</h2>
                            <p style="font-size: 2rem" class="text-muted fw-bold">{{$user->division->name}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 ">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Following</h2>
                            <p style="font-size: 4rem" class="text-muted fw-bold">{{$user->followings->count()}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 ">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Follower</h2>
                            <p style="font-size: 4rem" class="text-muted fw-bold">{{$user->followings->count()}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Skill</h2>
                            @foreach($user->skills as $skill)
                                <p style="" class="text-muted fw-bold">{{$skill->name}}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Request</h2>
                            <p style="font-size: 5rem" class="text-muted fw-bold">{{$user->requests->count()}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Report</h2>
                            <p style="font-size: 5rem" class="text-muted fw-bold">{{$user->reports->count()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
