@extends('layouts.dashboard',['name'=>'Send Mail'])
@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="" method="post">
            @method('POST')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group mt-3">
                <label><strong>Content</strong></label>

                <textarea class="ckeditor form-control" name="content"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link bài viết:</label>
                <input type="text" class="form-control" name="url">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@push('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endpush
