@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{asset('client/css/datatable.min.css')}}">
@endpush
@section('content')
    <div class="section__main">
        <div class="section__main__body row">
            <div class="section__body-item ">

            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
@push('script')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush
