

@extends('layouts.adminMaster')

@section('title','Edit barang')
@section('content')

<div class="container" style="width:50%">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default" >
                <div class="panel-heading" >EDIT USER</div>
                    <div class="panel-body" style="background: #9fc5e8">
                        @foreach($barang as $data)
                            <form method="post" action="{{route('update.barang')}}">
                                @csrf
                            
                                <div class="modal-body">
                            
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Barang</label>
                                        <div class="col-sm-4">
                                        <input type="text" class="form-control" id="id" name="id" value="{{$data->id ?? ''}}" hidden>
                                            <input type="text" class="form-control" id="barang" name="barang" value="{{$data->barang ?? ''}}" required>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Harga</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" id="harga" name="harga" value="{{$data->harga ?? ''}}" required>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btn-close">Close</button>
                                    <button type="submit" class="btn btn-primary" value="save" id="btn-save">Save</button>
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

