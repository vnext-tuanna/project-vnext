<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
@endpush
@include('layouts.includes.head')
<body>
<div class="section__login container-fluid">
    <div class="section__login__body row">
        <div
            class="body__left col-md-5 d-flex flex-column bd-highlight  justify-content-center text-center align-items-center text-white">
            <div class="head mt-5">
                <span><i class='bi bi-card-checklist'></i></span>
                <h2 class="text-uppercase">Daily Report System</h2>
            </div>
            <div class="head mt-auto">
                <img src="{{asset('images/illustration.svg')}}" class="w-75" alt="">
            </div>
        </div>
        <div class="body__right col-md-7 d-flex justify-content-center align-items-center ">
            <div class="body__login align-self-center flex-fill ml-3">
                <h2 class="text-center fw-bold fs-1">Login</h2>
                <p class="text-center ">Login to see your report, request and your good friends.</p>
                <form action="" method="POST">
                    @csrf
                    @if(session('msg'))
                        <p class="text-danger">{{session('msg')}}</p>
                    @endif
                    @if(session('error'))
                        <p class="text-danger">{{session('error')}}</p>
                    @endif
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-flex justify-content-between">
                            <span>Password</span>
                            <a href="" class="text-primary">Forgot Password?</a>
                        </label>
                        <input type="password" name="password" class="form-control form-input">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" name="remember" id="remember" class="form-check-input check-box">
                        <label class="form-check-label">Remember me</label>
                    </div>
                    <div class="bottom-form d-flex justify-content-between flex-column">
                        <button type="submit" class="btn btn-login btn-submit mt-2">Login</button>
                        <a href="{{route('auth', 'facebook')}}" class="btn btn-login btn-facebook mt-2"> <i class="bi bi-facebook"></i> Login with Facebook</a>
                        <a href="{{route('auth', 'google' )}}" class="btn btn-login btn-google mt-2"> <img src="{{asset('images/icons8-google.svg')}}" alt=""> Login with Google</a>
                        <a href="{{route('auth', 'github' )}}" class="btn btn-login btn-google mt-2"> <img src="{{asset('images/icons8-google.svg')}}" alt=""> Login with Github</a>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stack('modal')

@include('layouts.includes.script')

@include('layouts.includes.footer')

</body>
</html>
