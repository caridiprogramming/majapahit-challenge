<?php

namespace App\Http\Controllers;
use App\transaksi;
use App\user;
use App\barang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function tampil()
    {

        if(!session()->get('cekLogin')){
            return redirect()->action('loginController@index');
        }
        else{
            $transaksi = transaksi::join('user', 'transaksi.id_user', '=', 'user.id')
            ->join('barang', 'transaksi.id_barang', '=', 'barang.id')
            ->select('user.*', 'barang.*', 'transaksi.*')
            ->get();
        }
       


        return view('admin.transaksi',compact('transaksi'));
    }
    
    public function tambah(){
        $data = request()->validate([
            'nama' => ['required'],
            'email' =>['required'],
            'password' =>['required'],
        ]);
       $data['status'] = "admin";
       transaksi::create($data);

        return redirect()->back();
    }
  
   public function delete(request $request){

     transaksi::where('id', '=', $request->id )->delete();
    return redirect()->back();
   }
}
