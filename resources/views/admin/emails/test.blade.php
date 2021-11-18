<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Send Mail using Queue Tutorial - TechvBlogs</title>
</head>
<body>
    <p>Hi,{{ $request->user->name }}</p>
    <p>Request của bạn đã được {{ $request->manager->name }} chấp nhận</p>
    <p>Nội dung của request:</p>
    <p>Thể loại:{{ $request->type }}</p>
    <p>Thời gian: {{ date('d-m-Y', strtotime($request->start_date)) }} - {{ date('d-m-Y', strtotime($request->end_date)) }}</p>
</body>
</html>