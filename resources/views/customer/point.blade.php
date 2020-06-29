@extends('layouts.customerMaster')

@section('title','Point')
@section('content')
        <div class="row">
                <div class="col-md-3">
                    <div class="card mb-2">
                        <div class="card-body">
                        <p>Point anda : {{ $point ?? '' }} </p>
                        
                        </div>
                    </div>
                </div>
        </div> 
        <div class="row" >
            @foreach($hadiah as $data)
                <div class="col-md-3" >
                    <div class="card mb-3">
                        <div class="card-body" style="background: #9fc5e8">
                        
                        <p>Point :{{$data->point ?? ''}}</p>
                        <p>Hadiah : {{$data->hadiah ?? ''}}</p>
                        
                        <button type="button" class="btn btn-primary" id="{{$data->id}}" onclick=" return klaim({{ $data->id }});" >
                        Klaim
                        </button>
                        <p id=""></p>
                        </div>
                        
                    </div>
                </div>
            @endforeach
        </div> 
        
   
        @endsection

@section('footer')
<script type="text/javascript">
    function klaim(id){
        
        tamp = String(id);
        //console.log(a);
      document.getElementById(tamp).style.backgroundColor = "gray";
      document.getElementById(tamp).disabled=true;
      document.getElementById(tamp).style.color ="green";
      document.getElementById(tamp).innerHTML +="Hadiah berhasil di kalim";
    }
   
   


</script>
@endsection