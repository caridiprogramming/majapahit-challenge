
@extends('layouts.adminMaster')

@section('title','Barang')
@section('content')

<h1>BARANG</h1>
<div class="row">
    <div class="col-md-2">
        <div class="card mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-barang">
         Tambah Barang
        </button>
        </div>
    </div>
</div> 

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Point</th>
      <th scope="col">Hadiah</th>
      <th scope="col" >Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($barang as $data)
    <tr>
        <td>{{ $data->id }}</td>
      <td>{{$data->barang}}</td>
      <td>{{$data->harga}}</td>
      <td colspan="2">
      <a href="barang/edit/{{$data->id}}" class="btn btn-sm btn-outline-primary">Edit</a>
      <a href="barang/delete/{{$data->id}}" class="btn btn-default btn-sm btn-outline-danger" >Delete</a>
     
    </td>
     
    </tr>
    @endforeach 
    
  </tbody>
</table>






<!-- MODAL TAMBAH BARANG -->
<div class="modal" id="modal-tambah-barang" role="dialog">
    <div class="modal-dialog modal-lg">
        
        <!-- Modal Content -->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Tambah Barang</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <form method="post" action="{{route('admin.barang')}}">
                @csrf
                
                <div class="modal-body">
              
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Barang</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="barang" name="barang" " required>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="harga" name="harga"  required>
                           
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
        
    </div>
</div>
<!-- MODAL TAMBAH BARANG -->





@endsection


