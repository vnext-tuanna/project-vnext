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
            <form class="" method="POST">
                @csrf
                <div class="row mt-3 mb-3">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Start date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="start_date" value="{{old('start_date', $request->start_date)}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">End date <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" name="end_date" value="{{old('start_date', $request->end_date)}}">
                    </div>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="inputAddress2">Approver</label>
                    <select id="inputState" class="form-control" name="manager_id" >
                        <option value="{{$request->manager->id}}">{{$request->manager->name}}</option>
                    </select>
                </div>

                <div class="form-group mt-3 mb-3">
                    <label for="inputAddress2">Type request</label>
                    <select id="inputState" class="form-control" name="type">
                        @foreach($typeRequests as $key => $typeRequest)
                            <option value="{{$key}}"
                            @if($key == $request->type) selected @endif> {{$typeRequest}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="inputAddress">Reason <span class="text-danger">*</span></label>
                    <textarea type="text" class="form-control" name="content_request">{{$request->content}}</textarea>
                </div>

                <button type="submit" class="btn mt-3 text-white m-auto" style="background-color: #01a3a4 ">Create request</button>
            </form>
        </div>
    </div>


@endsection
