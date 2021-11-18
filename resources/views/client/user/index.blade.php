@extends('layouts.app')

@section('content')
    <div class="section__user">
        <div class="section__user__content">
            <div class="content__head">
                <h4>User</h4>
            </div>
            <div class="content-body row">
                @foreach($users as $u)
                    <div class="col-md-6 col-xl-3 ">
                        <div class="user-info  p-3 ">
                            <div class="d-flex content__title">
                                <div class="flex-shrink-0 image">
                                    @if(Str::contains($u->image, asset('storage')))
                                        <img src="{{asset('storage/'. $u->image)}}" width="60px" height="60px"
                                             alt="">
                                    @else
                                        <img src="{{$u->image}}" width="60px" height="60px"
                                             alt="">
                                    @endif
                                </div>
                                <div class="flex-grow-0 ms-3 name">
                                    <span class=" fs-4 fw-bold">{{$u->name}}</span>
                                    <br>
                                    <span>PHP Developer</span>
                                </div>
                            </div>
                            <div class="content__info">
                                <ul class="list-unstyled">
                                    <li><i class="bi bi-envelope"></i> {{$u->email}}</li>
                                    <li><i class="bi bi-code-slash"></i> PHP, Laravel, Javascript</li>

                                </ul>
                            </div>
                            <div class="content__action text-center">
                                @if($user->isFollowing($u->id))
                                    <a href="{{route('follow', $u->id)}}" class="btn btn-follow">Unfollow</a>
                                @else
                                    <a href="{{route('follow', $u->id)}}" class="btn btn-follow">Follow</a>
                                @endif

                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="paginate d-flex justify-content-center mt-5">
                {{$users->links()}}
            </div>
        </div>
    </div>
@endsection
