<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Masyarakat;
use Illuminate\Support\Facades\Auth;

class MasController extends Controller
{
    public function login(){
        return view('layoutuser.login');
    }

    public function ceklogin(Request $request){
        $input = $request->all();

        $this->validate($request,[
            'nik_mas' => 'required',
            'password' => 'required',
        ]);

        if(Auth::guard('masyarakat')->attempt(['nik_mas' => $input['nik_mas'], 'password' => $input['password']])){
            return redirect('/db-masyarakat');
        }else{
            return redirect()->back()->with('error','NIM atau Password Salah!!');
        }
    }

    public function index(){
        return view('layoutuser.master');
    }
}