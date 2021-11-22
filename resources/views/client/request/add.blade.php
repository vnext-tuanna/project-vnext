@extends('layouts.app')

@section('content')
    <div class="section__request">
        <div class="request__form p-5 shadow">
            <div class="request__header row">
                <div class="col-md-6">
                    <h3>Add request</h3>
                </div>
                <div class="col-md-6 row justify-content-end ">
                    <a href="{{route('request')}}" class="btn col-4 text-white" style="background-color: #ee5253">Cancel</a>
                </div>
            </div>
            <hr>
            <form class="" action="" method="POST">
                @csrf
                <div class="row mt-3 mb-3">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Start date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="start_date">
                        @error('start_date')
                            <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">End date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="end_date">
                        @error('end_date')
                        <p style="color: red">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="inputAddress2">Approver</label>
                    <select id="inputState" class="form-control" name="manager_id" >
                            <option value="{{$managers->id}}">{{$managers->name}}</option>
                    </select>
                </div>

                <div class="form-group mt-3 mb-3">
                    <label for="inputAddress2">Type request</label>
                    <select id="inputState" class="form-control" name="type">
                        @foreach($typeRequests as $key => $typeRequest)
                            <option value="{{$key}}"> {{$typeRequest}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="inputAddress">Reason <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="content_request"></textarea>
                    @error('content_request')
                    <p style="color: red">{{$message}}</p>
                    @enderror
                </div>
                <button type="submit" class="btn mt-3 text-white m-auto" style="background-color: #01a3a4 ">Create request</button>
            </form>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->

@endsection
