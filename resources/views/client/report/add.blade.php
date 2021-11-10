@extends('layouts.app')

@section('content')

    <div class="section__report p-3">
        <div class="report__head">
            <h4>Report</h4>
            <hr>
        </div>
        <form action="" method="POST">
            @csrf
            <div class="form-group mt-3">
                <label for="">Title</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label><strong>Description :</strong></label>
                <textarea class="ckeditor form-control" name="description"></textarea>
            </div>
            <button class="btn  mt-3" style="background-color: #0a3d62; color: white">Send Report</button>
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
