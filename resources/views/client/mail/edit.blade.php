<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request checking</title>
</head>
<body>
<p>Hello, <strong>{{$modal->manager->name}}</strong></p>
<p>You have an request from:</p>
<ul>
    <li>Name: <strong>{{$modal->user->name}}</strong></li>
    <li>Type request: <strong>{{$modal->type}}</strong></li>
    <li>Time: <strong>{{$modal->start_date}} to {{$modal->end_date}}</strong></li>
    <li>Content: <strong> {{$modal->content}}</strong></li>
</ul>
<p>Please go to website, check and do action if you want.</p>

</body>
</html>
