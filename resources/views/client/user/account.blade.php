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
                    <div class="user-info-account  p-3 ">
                        <div class="content__title">
                            <div class="name d-flex">
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
                        <div class="content__info mt-3">
                            <ul class="list-unstyled p-3">
                                <li><i class="bi bi-telephone p-3"></i> +84962721374</li>
                                <li><i class="bi bi-envelope p-3"></i> tuanna3@vnext.com.vn</li>
                                <li><i class="bi bi-code-slash p-3"></i> PHP, Laravel, Javascript</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">

                            <h2 style="margin-top: 30px; opacity: .5">PHP Developer</h2>
                            <p style="font-size: 5rem" class="text-muted fw-bold">BO</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 ">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Follow</h2>
                            <p style="font-size: 5rem" class="text-muted fw-bold">100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Skill</h2>
                            <p style="font-size: 5rem" class="text-muted fw-bold">PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Request</h2>
                            <p style="font-size: 5rem" class="text-muted fw-bold">0</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="user-info-account  p-3 ">
                        <div class="content__title text-center" style="margin: auto">
                            <h2 style="margin-top: 30px;  opacity: .5">Report</h2>
                            <p style="font-size: 5rem" class="text-muted fw-bold">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
