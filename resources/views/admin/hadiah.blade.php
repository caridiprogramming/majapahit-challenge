
@extends('layouts.adminMaster')

@section('title','Data Hadiah')
@section('content')

<h1>HADIAH</h1>
<div class="row">
    <div class="col-md-2">
        <div class="card mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addHadiah">
         Tambah Hadiah
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
  @foreach($hadiah as $data)
    <tr>
        <td>{{ $data->id }}</td>
      <td>{{$data->point}}</td>
      <td>{{$data->hadiah}}</td>
      <td colspan="2">
      <a href="hadiah/edit/{{$data->id}}" class="btn btn-sm btn-outline-primary" >Edit</a>
      <a href="hadiah/delete/{{$data->id}}" class="btn btn-default btn-sm btn-outline-danger" >Delete</a>
     
    </td>
     
    </tr>
    @endforeach 
    
  </tbody>
</table>






<!--TAMBAH HADIAH MODAL -->
<div class="modal" id="addHadiah" role="dialog">
    <div class="modal-dialog modal-lg">
        
        <!-- Modal Content -->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Tambah Hadiah</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <form method="post" action="{{route('admin.hadiah')}}">
                @csrf
                <div class="modal-body">
              
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Point</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="point" name="point" required>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Hadiah</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="hadiah" name="hadiah" required>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
        </div>
        <!-- Modal Content -->
    </div>
</div>

@endsection
