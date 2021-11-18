@extends('layouts.app')
@push('style')
    <link rel="stylesheet" href="{{asset('css/datatable.min.css')}}">
@endpush
@section('content')
    <div class="section__user">
        <div class="section__user__content">

            <div class="content-body row">
                <div class="content__profile col-md-6 col-lg-3">
                    <div class="content__head pt-3">
                        <h4><i class="bi bi-person-bounding-box"></i> Profile</h4>
                        <hr>
                    </div>
                    <div class="user-info  p-3 ">
                        <div class="d-flex content__title">
                            <div class="flex-shrink-0 image-head">
                                @if(Str::contains($user->image, 'images/user'))
                                    <img src="{{asset('storage/'. $user->image)}}" width="60px" height="60px"
                                         alt="">
                                @else
                                    <img src="{{$user->image}}" width="60px" height="60px"
                                         alt="">
                                @endif
                            </div>
                            <div class="flex-grow-0 ms-3 name">
                                <span class=" fs-4 fw-bold">{{$user->name}}</span>
                                <br>
                                <span>{{$user->position->name}}</span>
                                <br>
                                <span>{{$user->division->name}}</span>

                            </div>
                        </div>
                        <div class="content__info mt-3">
                            <ul class="list-unstyled">
                                <li><i class="bi bi-envelope"></i> {{$user->email}}</li>
                               <li><i class="bi bi-code-slash"></i>
                                   @foreach($user->skills as $skill)
                                       <span>{{$skill->name}}</span>
                                   @endforeach

                                </li>
                            </ul>
                        </div>
                        <div class="content__menu">
                            <ul class="list-unstyled ml-3 menu__link">
                                <li><a href="{{route('user.show', $user->id)}}"><i class="bi bi-layers"></i> &nbsp;Account Information</a></li>
                                <li><a href="{{route('user.edit', $user->id)}}"><i class="bi bi-pencil-square"></i> &nbsp;Change Information</a></li>
                                @if(Auth::user()->provider==null)
                                    <li><a href="{{route('changePassword.edit',$user->id)}}"><i class="bi bi-file-lock"></i> &nbsp;Change Password</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="content__profile col-md-6 col-lg-9">
                  <div class="content__following">
                      <div class="follow-title pt-3">
                          <h4><i class="bi bi-check2-all"></i> Following ({{$followings->count()}})</h4>
                          <hr>
                      </div>
                     @foreach($followings as $following)
                          <div class="user-info mb-1">
                              <div class="content__follow ">
                                  <div class="follow__list d-flex justify-content-between align-items-center">
                                      <div class="image ">
                                          <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                      </div>
                                      <div class="name">
                                          <p>{{$following->name}}</p>
                                      </div>
                                      <div class="position">
                                          <p>{{$following->position->name}}</p>
                                      </div>
                                      <div class="skill">
                                          @foreach($following->skills as $skill)
                                              <span>{{$skill->name}}</span>
                                          @endforeach
                                      </div>
                                      <div class="division">
                                          <p>{{$following->division->name}}</p>
                                      </div>
                                      <div class="action">
                                          <a href="{{route('follow', $following->id)}}" class="btn" style="background-color: #130f40; color: white" >Unfollow</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @endforeach
                  </div>
                    <div class="content__followed">
                        <div class="follow-title pt-3">
                            <h4><i class="bi bi-check2-all"></i> Follower ({{$followers->count()}})</h4>
                            <hr>
                        </div>

                        @foreach($followers as $follower)
                            <div class="user-info mb-1">
                                <div class="content__follow ">
                                    <div class="follow__list d-flex justify-content-between align-items-center">
                                        <div class="image ">
                                            <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                        </div>
                                        <div class="division">
                                            <p>{{$follower->name}}</p>
                                        </div>
                                        <div class="position">
                                            <p>PHP Internship</p>
                                        </div>
                                        <div class="skill">
                                            <p>PHP, Laravel, Javasript</p>
                                        </div>
                                        <div class="content__action text-center">
                                            @if($user->isFollowing($follower->id))
                                                <a href="{{route('follow', $follower->id)}}" class="btn btn-follow">Unfollow</a>
                                            @else
                                                <a href="{{route('follow', $follower->id)}}" class="btn btn-follow">Follow</a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/datatable.min.js')}}"></script>
    <script src="{{asset('js/datatableBootstrap.min.js')}}"></script>
@endpush
@push('script')
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
@endpush
