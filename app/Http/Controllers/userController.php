<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class userController extends Controller
{
    public function tampil()
    {
        if(!session()->get('cekLogin')){
            return redirect()->action('loginController@index');
        }
        else{
            $user = user::get();
            return view('admin.user',compact('user'));
        }
       
    }

    public function tambah(){
        $data = request()->validate([
            'nama' => ['required'],
            'email' =>['required'],
            'password' =>['required'],
        ]);
       $data['status'] = "admin";
       $data['point_customer'] = 0;
        user::create($data);

        return redirect()->back();
    }
   public function edit(request $request){
   
    $user= user::where('id', '=', $request->id )->get();
    
    return view('admin.editUser',compact('user'));
    
   }

   public function update(request $request){
        

        $aksi = user::where('id',$request->id)
        ->update([
            'nama' => $request->Enama,
            'email' => $request->Eemail,
            'password' => $request->Epassword,
            'status' => $request->Estatus,
        ]);

        return redirect()->action('userController@tampil');
   }
   public function delete(request $request){

     user::where('id', '=', $request->id )->delete();
    return redirect()->back();
   }
}
