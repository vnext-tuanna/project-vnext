@extends('layouts.app')
@push('style')
    <link rel="stylesheet" href="{{asset('css/datatable.min.css')}}">
@endpush

@section('content')
    <div class="section__user">
        <div class="section__user__content">

            <div class="content-body row">
                <div class="content__profile col-md-3 col-lg-3">
                    <div class="content__head pt-3">
                        <h4><i class="bi bi-person-bounding-box"></i> Profile</h4>
                        <hr>
                    </div>
                    <div class="user-info  p-3 ">
                        <div class="d-flex content__title">
                            <div class="flex-shrink-0 image-head">
                                <img src="{{asset('client/images/person1.jpeg')}}" alt="...">
                            </div>
                            <div class="flex-grow-0 ms-3 name">
                                <span class=" fs-4 fw-bold">Luca Doncic</span>
                                <br>
                                <span>PHP Developer</span>
                            </div>
                        </div>
                        <div class="content__info mt-3">
                            <ul class="list-unstyled">
                                <li><i class="bi bi-telephone"></i> +84962721374</li>
                                <li><i class="bi bi-envelope"></i> tuanna3@vnext.com.vn</li>
                                <li><i class="bi bi-pin-map"></i> Ha noi - Viet Nam</li>
                                <li><i class="bi bi-code-slash"></i> PHP, Laravel, Javascript</li>

                            </ul>
                        </div>
                        <div class="content__menu">
                            <ul class="list-unstyled ml-3 menu__link">
                                <li><a href=""><i class="bi bi-eye"></i> &nbsp;Overview</a></li>
                                <li><a href=""><i class="bi bi-layers"></i> &nbsp;Account Information</a></li>
                                <li><a href=""><i class="bi bi-pencil-square"></i> &nbsp;Change Information</a></li>
                                <li><a href=""><i class="bi bi-file-lock"></i> &nbsp;Change Password</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="content__profile col-md-9 col-xl-9">
                  <div class="content__following">
                      <div class="follow-title pt-3">
                          <h4><i class="bi bi-check2-all"></i> Following</h4>
                          <hr>
                      </div>
                      <div class="user-info mb-1">
                          <div class="content__follow ">
                              <div class="follow__list d-flex justify-content-between align-items-center">
                                  <div class="image ">
                                      <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                  </div>
                                  <div class="division">
                                      <p>Nguyen Anh Tuan</p>
                                  </div>
                                  <div class="position">
                                      <p>PHP Internship</p>
                                  </div>
                                  <div class="skill">
                                      <p>PHP, Laravel, Javasript</p>
                                  </div>
                                  <div class="action">
                                      <a href="" class="btn">Unfollow</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="user-info mb-1">
                          <div class="content__follow ">
                              <div class="follow__list d-flex justify-content-between align-items-center">
                                  <div class="image ">
                                      <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                  </div>
                                  <div class="division">
                                      <p>Nguyen Anh Tuan</p>
                                  </div>
                                  <div class="position">
                                      <p>PHP Internship</p>
                                  </div>
                                  <div class="skill">
                                      <p>PHP, Laravel, Javasript</p>
                                  </div>
                                  <div class="action">
                                      <a href="" class="btn">Unfollow</a>
                                  </div>
                              </div>
                          </div>
                      </div> <div class="user-info mb-1">
                          <div class="content__follow ">
                              <div class="follow__list d-flex justify-content-between align-items-center">
                                  <div class="image ">
                                      <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                  </div>
                                  <div class="division">
                                      <p>Nguyen Anh Tuan</p>
                                  </div>
                                  <div class="position">
                                      <p>PHP Internship</p>
                                  </div>
                                  <div class="skill">
                                      <p>PHP, Laravel, Javasript</p>
                                  </div>
                                  <div class="action">
                                      <a href="" class="btn">Unfollow</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="user-info mb-1">
                          <div class="content__follow ">
                              <div class="follow__list d-flex justify-content-between align-items-center">
                                  <div class="image ">
                                      <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                  </div>
                                  <div class="division">
                                      <p>Nguyen Anh Tuan</p>
                                  </div>
                                  <div class="position">
                                      <p>PHP Internship</p>
                                  </div>
                                  <div class="skill">
                                      <p>PHP, Laravel, Javasript</p>
                                  </div>
                                  <div class="action">
                                      <a href="" class="btn">Unfollow</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="user-info mb-1">
                          <div class="content__follow ">
                              <div class="follow__list d-flex justify-content-between align-items-center">
                                  <div class="image ">
                                      <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                  </div>
                                  <div class="division">
                                      <p>Nguyen Anh Tuan</p>
                                  </div>
                                  <div class="position">
                                      <p>PHP Internship</p>
                                  </div>
                                  <div class="skill">
                                      <p>PHP, Laravel, Javasript</p>
                                  </div>
                                  <div class="action">
                                      <a href="" class="btn">Unfollow</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                    <div class="content__followed">
                        <div class="follow-title pt-3">
                            <h4><i class="bi bi-check2-all"></i> Followed</h4>
                            <hr>
                        </div>
                        <div class="user-info mb-1">
                            <div class="content__follow ">
                                <div class="follow__list d-flex justify-content-between align-items-center">
                                    <div class="image ">
                                        <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                    </div>
                                    <div class="division">
                                        <p>Nguyen Anh Tuan</p>
                                    </div>
                                    <div class="position">
                                        <p>PHP Internship</p>
                                    </div>
                                    <div class="skill">
                                        <p>PHP, Laravel, Javasript</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="user-info mb-1">
                            <div class="content__follow ">
                                <div class="follow__list d-flex justify-content-between align-items-center">
                                    <div class="image ">
                                        <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                    </div>
                                    <div class="division">
                                        <p>Nguyen Anh Tuan</p>
                                    </div>
                                    <div class="position">
                                        <p>PHP Internship</p>
                                    </div>
                                    <div class="skill">
                                        <p>PHP, Laravel, Javasript</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="user-info mb-1">
                            <div class="content__follow ">
                                <div class="follow__list d-flex justify-content-between align-items-center">
                                    <div class="image ">
                                        <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                    </div>
                                    <div class="division">
                                        <p>Nguyen Anh Tuan</p>
                                    </div>
                                    <div class="position">
                                        <p>PHP Internship</p>
                                    </div>
                                    <div class="skill">
                                        <p>PHP, Laravel, Javasript</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="user-info mb-1">
                            <div class="content__follow ">
                                <div class="follow__list d-flex justify-content-between align-items-center">
                                    <div class="image ">
                                        <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                    </div>
                                    <div class="division">
                                        <p>Nguyen Anh Tuan</p>
                                    </div>
                                    <div class="position">
                                        <p>PHP Internship</p>
                                    </div>
                                    <div class="skill">
                                        <p>PHP, Laravel, Javasript</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="user-info mb-1">
                            <div class="content__follow ">
                                <div class="follow__list d-flex justify-content-between align-items-center">
                                    <div class="image ">
                                        <img src="{{asset('client/images/person1.jpeg')}}" alt="" class="rounded-3" >
                                    </div>
                                    <div class="division">
                                        <p>Nguyen Anh Tuan</p>
                                    </div>
                                    <div class="position">
                                        <p>PHP Internship</p>
                                    </div>
                                    <div class="skill">
                                        <p>PHP, Laravel, Javasript</p>
                                    </div>

                                </div>
                            </div>
                        </div>

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
