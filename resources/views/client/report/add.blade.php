@extends('layouts.app')

@section('content')

    <div class="section__report p-3">
        <div class="report__head">
            <h4>Report</h4>
            <hr>
        </div>
        <form action="">
            <div class="form-group mt-3">
                <label for="">Title</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="">Content</label>
                <textarea id="description"></textarea>
            </div>
            <button class="btn  mt-3" style="background-color: #0a3d62; color: white">Send Report</button>
        </form>
    </div>

@endsection
@push('js')
    <script src="{{ asset('client/js/CKEditor.js') }}"></script>
@endpush
@push('script')
    <script>
        ClassicEditor
            .create( document.querySelector( '#description' ))
    </script>
@endpush
