@extends('layouts.adminMaster')

@section('title','Edit hadiah')
@section('content')

<div class="container" style="width:50%">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default" >
                <div class="panel-heading" >EDIT USER</div>
                <div class="panel-body" style="background: #9fc5e8">
                    @foreach($hadiah as $data)
                        <form method="post" action="{{route('update.hadiah')}}">
                            @csrf
                            <div class="modal-body">
                        
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Point</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="id" name="id" value="{{$data->id ?? ''}}" hidden>
                                        <input type="text" class="form-control" id="point" name="point" value="{{$data->point ?? ''}}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Hadiah</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="hadiah" name="hadiah" value="{{$data->hadiah ?? ''}}" required>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" >Update</button>
                            </div>
                        </form>
                    @endforeach 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection