@extends('layouts.app')
@section('content')
    <div class="section__report p-3">
        <div class="report__head">
            <h4>Report</h4>
            <hr>
        </div>
        <form action="{{route('report.update', [$report->id])}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group mt-3">
                <label for="">Title</label>
                <input type="text" class="form-control"  value="{{old('title', $report->title)}}" name="title">
                @error('title')  <p style="color: red">{{$message}}</p> @enderror
            </div>
            <div class="form-group mt-3 mb-3">
                <label for="inputAddress2">Manager</label>
                <select id="inputState" class="form-control" name="manager_id" >
                    <option value="{{$managers->id}}">{{$managers->name}}</option>
                </select>
            </div>
            <div class="form-group mt-3">
                <label><strong>Content</strong></label>
                <textarea class="ckeditor form-control"  name="description">{{old('description', $report->description)}}</textarea>
            </div>
            @error('description')
            <p style="color: red">{{$message}}</p>
            @enderror
            <button class="btn  mt-3" style="background-color: #0a3d62; color: white">Update Report</button>
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
