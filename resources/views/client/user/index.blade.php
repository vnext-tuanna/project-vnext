@extends('layouts.app')

@section('content')
    <div class="section__user">
        <div class="section__user__content">
            <div class="content__head">
                <h4>User</h4>
            </div>
            <div class="content-body row">
                <div class="col-md-6 col-xl-3 ">
                        <div class="user-info  p-3 ">
                        <div class="d-flex content__title">
                            <div class="flex-shrink-0 image">
                                @if(Str::contains($user->image, asset('storage')))
                                    <img src="{{asset('storage/'. $user->image)}}" width="60px" height="60px"
                                         alt="">
                                @else
                                    <img src="{{$user->image}}" width="60px" height="60px"
                                         alt="">
                                @endif
                            </div>
                            <div class="flex-grow-0 ms-3 name">
                                <span class=" fs-4 fw-bold">Luca Doncic</span>
                                <br>
                                <span>PHP Developer</span>
                            </div>
                        </div>
                        <div class="content__intro">
                            <p>There is no one who loves pain itself,
                                who seeks after it and wants to have it,
                                simply because it is pain</p>
                        </div>
                        <div class="content__info">
                            <ul class="list-unstyled">
                                <li><i class="bi bi-telephone"></i> +84962721374</li>
                                <li><i class="bi bi-envelope"></i> tuanna3@vnext.com.vn</li>
                                <li><i class="bi bi-pin-map"></i> Ha noi - Viet Nam</li>
                                <li><i class="bi bi-code-slash"></i> PHP, Laravel, Javascript</li>

                            </ul>
                        </div>
                        <div class="content__action text-center">
                            <a href="" class="btn btn-follow">Follow</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6  col-xl-3">
                    <div class="user-info  p-3 ">
                        <div class="d-flex content__title">
                            <div class="flex-shrink-0 image">
{{--                                <img src="{{asset('client/images/person1.jpeg')}}" alt="...">--}}
                            </div>
                            <div class="flex-grow-0 ms-3 name">
                                <span class=" fs-4 fw-bold">Luca Doncic</span>
                                <br>
                                <span>PHP Developer</span>
                            </div>
                        </div>
                        <div class="content__intro">
                            <p>There is no one who loves pain itself,
                                who seeks after it and wants to have it,
                                simply because it is pain</p>
                        </div>
                        <div class="content__info">
                            <ul class="list-unstyled">
                                <li><i class="bi bi-telephone"></i> +84962721374</li>
                                <li><i class="bi bi-envelope"></i> tuanna3@vnext.com.vn</li>
                                <li><i class="bi bi-pin-map"></i> Ha noi - Viet Nam</li>
                                <li><i class="bi bi-code-slash"></i> PHP, Laravel, Javascript</li>

                            </ul>
                        </div>
                        <div class="content__action text-center">
                            <a href="" class="btn btn-follow">Follow</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3 ">
                    <div class="user-info  p-3 ">
                        <div class="d-flex content__title">
                            <div class="flex-shrink-0 image">
{{--                                <img src="{{asset('client/images/person1.jpeg')}}" alt="...">--}}
                            </div>
                            <div class="flex-grow-0 ms-3 name">
                                <span class=" fs-4 fw-bold">Luca Doncic</span>
                                <br>
                                <span>PHP Developer</span>
                            </div>
                        </div>
                        <div class="content__intro">
                            <p>There is no one who loves pain itself,
                                who seeks after it and wants to have it,
                                simply because it is pain</p>
                        </div>
                        <div class="content__info">
                            <ul class="list-unstyled">
                                <li><i class="bi bi-telephone"></i> +84962721374</li>
                                <li><i class="bi bi-envelope"></i> tuanna3@vnext.com.vn</li>
                                <li><i class="bi bi-pin-map"></i> Ha noi - Viet Nam</li>
                                <li><i class="bi bi-code-slash"></i> PHP, Laravel, Javascript</li>

                            </ul>
                        </div>
                        <div class="content__action text-center">
                            <a href="" class="btn btn-follow">Follow</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="user-info  p-3 ">
                        <div class="d-flex content__title">
                            <div class="flex-shrink-0 image">
{{--                                <img src="{{asset('client/images/person1.jpeg')}}" alt="...">--}}
                            </div>
                            <div class="flex-grow-0 ms-3 name">
                                <span class=" fs-4 fw-bold">Luca Doncic</span>
                                <br>
                                <span>PHP Developer</span>
                            </div>
                        </div>
                        <div class="content__intro">
                            <p>There is no one who loves pain itself,
                                who seeks after it and wants to have it,
                                simply because it is pain</p>
                        </div>
                        <div class="content__info">
                            <ul class="list-unstyled">
                                <li><i class="bi bi-telephone"></i> +84962721374</li>
                                <li><i class="bi bi-envelope"></i> tuanna3@vnext.com.vn</li>
                                <li><i class="bi bi-pin-map"></i> Ha noi - Viet Nam</li>
                                <li><i class="bi bi-code-slash"></i> PHP, Laravel, Javascript</li>

                            </ul>
                        </div>
                        <div class="content__action text-center">
                            <a href="" class="btn btn-follow">Follow</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
