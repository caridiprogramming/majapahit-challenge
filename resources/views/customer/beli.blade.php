@extends('layouts.customerMaster')

@section('title','Beli')
@section('content')

<div class="container" style="width:50%">
    <div class="row">
        <div class="col-md-8 col-md-offset-3">
            <div class="panel panel-default" >
                <div class="panel-heading" >TRANSAKSI</div>
                    <div class="panel-body" style="background: #9fc5e8">
                            @foreach($pilih as $pil)
                                <form method="post" action="{{route('beli')}}">
                                    @csrf
                                    <div class="modal-body">
                                
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Barang</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="id_barang" name="id_barang" value="{{$pil->id}}" hidden>
                                                <input type="text" class="form-control" id="barang" name="barang" value="{{$pil->barang}}" readonly>
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Harga</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="harga" name="harga" value="{{$pil->harga}}" readonly>
                                               
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jumlah</label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" id="jumlah" name="jumlah" onkeyup=" return hitung();" required>
                                               
                                            </div>
                                           
                                        </div>
                                        <div class="form-group row">
                                            
                                            <label class="col-sm-2 col-form-label">total</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="total" name="total"  readonly>
                                                
                                            </div>
                                        </div>
                                        
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Kembali</button>
                                        <button type="submit" class="btn btn-primary" >Beli</button>
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

@section('footer')
<script>
     function hitung(){
          harga = $('#harga').val();
          jumlah =$('#jumlah').val();
          total= harga*jumlah;
          document.getElementById("total").value=total;
      }
</script>
@endsection