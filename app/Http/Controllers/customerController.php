<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\transaksi;
use App\user;
use App\hadiah;

class customerController extends Controller
{
    public function tampilBelanja()
    {
        if(!session()->get('cekLogin')){
            return redirect()->action('loginController@index');
        }
        else{
            $barang = barang::get();
            return view('customer.belanja',compact('barang'));
        }
        
    }
    
    public function pilihBarang(request $request){
        
        $pilih = barang::where('id', '=', $request->id )->get();
        return view('customer.beli',compact('pilih'));
    }
    public function beliBarang(request $request){
        $request->validate([
            'jumlah' =>['required'],
        ]);
        $data = new transaksi();
        $data->id_user = session()->get('id'); 
        $data->id_barang = $request->id_barang;
        $data->jumlah= $request->jumlah;
        $data->total=$request->total;
        $data->save();

        $id = session()->get('id');
        $dataUser = user::where('id', '=', $id )->get('point_customer');
         $point = $dataUser[0]['point_customer'] + 5 ;
        
         $aksi = user::where('id',$id)
        ->update([
            'point_customer' => $point
        ]);
        session()->put('point',$point);

        return redirect()->action('customerController@tampilBelanja');
    }



    //TUKAR POINT
    public function tampilPoint()
    {
        $point = session()->get('point');
        $hadiah= hadiah::where('point','<=',$point)->get();
       
        return view('customer.point',compact('point','hadiah'));
    }
}
