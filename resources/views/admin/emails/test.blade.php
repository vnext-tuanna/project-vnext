<!DOCTYPE html>
<html>
<head>
    <title>Report System</title>
</head>
<body>
    <p>Hi, <strong>{{ $request->user->name }}</strong></p>
    <p>Request của bạn đã được {{ $request->manager->name }} chấp nhận</p>
    <p>Nội dung của request:</p>
    <p style="padding-left:30px;">Thể loại:{{ $request->type == 1 ? 'In Leave' : ($request->type == 2 ? 'Leave Out' : 'Leave Early') }}</p>
    <p style="padding-left:30px;">Thời gian: {{ date('d-m-Y', strtotime($request->start_date)) }} - {{ date('d-m-Y', strtotime($request->end_date)) }}</p>
</body>
</html>