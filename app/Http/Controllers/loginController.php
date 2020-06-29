<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function daftar(){
        $data = request()->validate([
            'nama' => ['required'],
            'email' =>['required'],
            'password' =>['required'],
        ]);
        $data['status'] = "customer";
        $data['point_customer'] = 0;
        user::create($data);

        return redirect()->back();
    }

    public function login(request $request){
        $email = $request->email;
        $password = $request->password;

        $data = user::where('email',$email)->first();
    
        if($data){ //apakah email tersebut ada atau tidak
            if($password == $data->password){
                
               session()->put('id',$data->id);
               session()->put('point',$data->point_customer);
                session()->put('cekLogin',TRUE);
               
               if($data->status == "admin"){
                     return redirect()->action('transaksiController@tampil');
               }else{
                     return redirect()->action('customerController@tampilBelanja');
               }
            }
            else{
                return redirect()->action('loginController@index')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect()->action('loginController@index')->with('alert','Password atau Email, Salah!');
        }


    }

    public function logout(){
         session()->flush();
        return redirect()->action('loginController@index')->with('alert','Kamu sudah logout');
    }
}
