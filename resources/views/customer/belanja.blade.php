@extends('layouts.customerMaster')

@section('title','Belanja')
@section('content')
<div class="row">
    @foreach($barang as $data)
        <div class="col-md-2">
            <div class="card mb-2" >
                <div class="card-body" >
                
                <p>{{$data->barang}}</p>
                <p>{{$data->harga}}</p>
                </div>
                <div class="card-body" style="background: #9fc5e8">
                <a href="belanja/pilihBarang/{{$data->id}}" class="btn btn-sm btn-outline-primary" >Beli</a>
                </div>
                
            </div>
        </div>
    @endforeach
</div>        
@endsection
