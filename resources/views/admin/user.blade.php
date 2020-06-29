
@extends('layouts.adminMaster')

@section('title','Data User')
@section('content')

<h1>USER</h1>
<div class="row">
    <div class="col-md-2">
        <div class="card mb-3">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-user">
         Tambah Admin
        </button>
        </div>
    </div>
</div> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col" >Password</th>
      <th scope="col" >Status</th>
      <th scope="col" >Aksi</th>


    </tr>
  </thead>
  <tbody>
  @foreach($user as $data)
    <tr>
        <td>{{ $data->id }}</td>
      <td>{{$data->nama }}</td>
      <td>{{$data->email }}</td>
      <td>{{$data->password }}</td>
      <td>{{$data->status }}</td>
      <td colspan="2">
      <a href="user/edit/{{$data->id ?? ''}}" class="btn btn-sm btn-outline-primary">Edit</a>
      <a href="user/delete/{{$data->id ?? ''}}" class="btn btn-default btn-sm btn-outline-danger" >Delete</a>
     
    </td>
     
    </tr>
    @endforeach 
    
  </tbody>
</table>


<!--TAMBAH USER MODAL -->
<div class="modal" id="modal-tambah-user" role="dialog">
    <div class="modal-dialog modal-lg">
        
        <!-- Modal Content -->
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Registrasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>                
            </div>
            <form method="post" action="{{route('tambah.user')}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-4">
                            <input type="text" id="nama" name="nama"  class="form-control" required>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email"  id="email" name="email"  class="form-control " required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </form>
        </div>
        
        <!-- Modal Content -->
    </div>
</div>



@endsection

