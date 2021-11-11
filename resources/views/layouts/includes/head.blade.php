<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token()  }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="app.content_locale" content="{{ config('app.locale')  }}">
    <meta name="app.env" content="{{ app()->environment()  }}">
    <meta name="app.lang" content="{{ config('app.locale')  }}">
    <meta name="robots" content="index,follow"/>
    <meta name="revisit-after" content="1 days">
    <title>Laravel</title>
    <meta name="title" content="Laravel"/>
    <meta name="description" content="Laravel"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Normalize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">

    <!-- CSS head -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    @stack('css')
    @stack('style')
    <!-- JS head -->
    @stack('script-head')
    @stack('js-head')
</head>
