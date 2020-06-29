<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hadiah;

class hadiahController extends Controller
{
    public function tampil()
    {
        if(!session()->get('cekLogin')){
            return redirect()->action('loginController@index');
        }
        else{
            $hadiah = hadiah::get();
              return view('admin.hadiah',compact('hadiah'));
        }
        
    }
    public function tambah(){
        $data = request()->validate([
            'point' => ['required'],
            'hadiah' =>['required'],
        ]);
       
        hadiah::create($data);

        return redirect()->back();
    }
    public function edit(request $request){

        $hadiah = hadiah::where('id', '=', $request->id )->get();
        return view('admin.editHadiah',compact('hadiah'));
       }
    
    public function update(request $request){

       
        hadiah::where('id',$request->id)
        ->update([
            'point' => $request->point,
            'hadiah' => $request->hadiah
        ]);

        return redirect()->action('hadiahController@tampil');
    }
    public function delete(request $request){

        hadiah::where('id', '=', $request->id )->delete();
        return redirect()->back();
    }
}
