<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class barangController extends Controller
{
    public function tampil()
    {
        if(!session()->get('cekLogin')){
            return redirect()->action('loginController@index');
        }
        else{
            $barang = barang::get();
             return view('admin.barang',compact('barang'));
        }
       
    }
    public function tambah(){
        $data = request()->validate([
            'barang' => ['required'],
            'harga' =>['required'],
        ]);
       
        barang::create($data);

        return redirect()->back();
    }
   public function edit(request $request){

    $barang = barang::where('id', '=', $request->id )->get();
    return view('admin.editBarang',compact('barang'));
   }

   public function update(request $request){
        
        $aksi = barang::where('id',$request->id)
        ->update([
            'barang' => $request->barang,
            'harga' => $request->harga
        ]);
        return redirect()->action('barangController@tampil');
   }
   public function delete(request $request){

     barang::where('id', '=', $request->id )->delete();
    return redirect()->back();
   }
}
