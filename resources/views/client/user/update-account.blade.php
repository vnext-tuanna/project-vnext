@extends('layouts.app')

@section('content')
    <div class="section__report p-3">
        <div class="report__head">
            <h4>Report</h4>
            <hr>
        </div>
        <form action="{{route('user.update', $user->id)}}" method="POST"  id="addForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mt-3">
                <label for="">Title</label>
                <input type="text" class="form-control" name="name" value="{{old('name', $user->name)}}">
            </div>
            <div class="form-group mt-3">
                <div class="image">
                    @if(Str::contains($user->image, 'images/user'))
                        <img src="{{asset('storage/'. $user->image)}}" width="60px" height="60px"
                             alt="">
                    @else
                        <img src="{{$user->image}}" width="60px" height="60px"
                             alt="">
                    @endif
                </div>
                <label>Image </label>
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn  mt-3" style="background-color: #0a3d62; color: white">Update Information</button>
        </form>
    </div>
@endsection
@push('js')
    <script src="{{asset('js/validation.js')}}"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
