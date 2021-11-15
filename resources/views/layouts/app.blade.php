<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@push('css')
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

@endpush
@include('layouts.includes.head')

<body id="body-pd">
<header class="header shadow d-flex justify-content-between" id="header">
    <div class="header_toggle"> <i class="bi bi-text-indent-left" id="header-toggle"></i> </div>
    <div class="p-3">
        @auth
            @if(Str::contains(Auth::user()->image, 'images/user'))
                <img src="{{asset('storage/'. Auth::user()->image)}}" width="40px" height="40px" style="border-radius: 30px" alt="Chua co anh">

            @else
                <img src="{{Auth::user()->image}}" width="40px" height="40px" style="border-radius: 30px"
                     alt="">
            @endif
        @endauth
    </div>
</header>
<div class="l-navbar shadow" id="nav-bar">
    <nav class="nav">
        <div>
            <a href="#" class="nav_logo"> <i class='bi bi-card-checklist nav_logo-icon'></i> <span class="nav_logo-name">Daily Report</span> </a>
            <div class="nav_list">
                <a href="#" class="nav_link"> <i class='bi bi-house nav_icon'></i> <span class="nav_name">Home</span> </a>
                <a href="#" class="nav_link"> <i class='bi bi-megaphone nav_icon'></i> <span class="nav_name">Request</span> </a>
                <a href="#" class="nav_link"> <i class="bi bi-people nav_icon"></i><span class="nav_name">Member</span> </a>
                <a href="{{route('report.index')}}" class="nav_link"> <i class="bi bi-check2-square nav_icon"></i><span class="nav_name">Report</span> </a>
                <a href="{{route('user.index')}}" class="nav_link"> <i class='bi bi-person nav_icon'></i> <span class="nav_name">Acount</span> </a>
                <a href="{{route('logout')}}" class="nav_link"> <i class='bi bi-box-arrow-right nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </div>
        </div>

    </nav>
</div>
<div class="height-100 content container">
    <main class="main">
        @yield('content')
    </main>
</div>


@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                if(toggle && nav && bodypd && headerpd){
                    toggle.addEventListener('click', ()=>{
                        nav.classList.toggle('show')
                        bodypd.classList.toggle('body-pd')
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle','nav-bar','body-pd','header')
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink(){
                if(linkColor){
                    linkColor.forEach(l=> l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))
        });
    </script>
@endpush
@stack('modal')

@include('layouts.includes.script')

@include('layouts.includes.footer')

</body>
</html>
