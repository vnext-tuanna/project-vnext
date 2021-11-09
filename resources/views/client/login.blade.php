<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                <form>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control form-input">
                    </div>
                    <div class="mb-3">
                        <label class="form-label d-flex justify-content-between">
                            <span>Password</span>
                            <a href="" class="text-primary">Forgot Password?</a>

                        </label>
                        <input type="password" class="form-control form-input">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input check-box">
                        <label class="form-check-label">Remember me</label>
                    </div>
                    <div class="bottom-form d-flex justify-content-between flex-column">
                        <button type="submit" class="btn btn-login btn-submit mt-2">Login</button>
                        <a href="" class="btn btn-login btn-facebook mt-2"> <i class="bi bi-facebook"></i> Login with Google</a>
                        <a href="" class="btn btn-login btn-google mt-2"> <img src="{{asset('images/icons8-google.svg')}}" alt=""> Login with Google</a>

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
