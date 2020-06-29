@extends('layouts.adminMaster')

@section('title','Edit User')
@section('content')

<div class="container" style="width:50%">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default" >
                <div class="panel-heading" >EDIT USER</div>
                <div class="panel-body" style="background: #9fc5e8">
                @foreach($user as $data)
                    <form method="post" action="{{route('update.user')}}">
                        @csrf
                        
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <div class="col-sm-4">
                                <input type="text" id="id" name="id"  class="form-control" value="{{ $data->id }}" hidden required>
                                    <input type="text" id="Enama" name="Enama"  class="form-control" value="{{ $data->nama }}"  required>
                                    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input type="email"  id="Eemail" name="Eemail"  class="form-control " value="{{$data->email }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" id="Epassword" name="Epassword" class="form-control" value="{{$data->password }}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-4">
                                    <input type="text" id="Estatus" name="Estatus"  class="form-control" value="{{$data->status }}"  required>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
           
@endsection