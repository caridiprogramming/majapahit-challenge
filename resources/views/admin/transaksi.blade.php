
@extends('layouts.adminMaster')

@section('title','Data Transaksi')
@section('content')

<h1>TRANSAKSI</h1>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Cutomer</th>
      <th scope="col">Barang</th>
      <th scope="col" >Harga</th>
      <th scope="col" >Jumlah</th>
      <th scope="col" >Total</th>
      <th scope="col" >Aksi</th>


    </tr>
  </thead>
  <tbody>
  @foreach($transaksi as $data)
    <tr>
     <td>{{ $data->id }}</td>
      <td>{{$data->nama}}</td>
      <td>{{$data->barang}}</td>
      <td>{{$data->harga}}</td>
      <td>{{$data->jumlah}}</td>
      <td>{{$data->total}}</td> 

       <td colspan="2">
      
      <a href="transaksi/delete/{{$data->id}}" class="btn btn-default btn-sm btn-outline-danger" >Delete</a>
     
    </td>
     
    </tr>
    @endforeach 
    
  </tbody>
</table>




@endsection

