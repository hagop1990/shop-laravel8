<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registeruser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\Welcome;

class RegisterController extends Controller
{
       public function register( Request $request){
          $request->validate([
             'name'=>'required',
             'email'=>'required |unique:registerusers',
             'password'=>'required',
             'address'=>'required',
             'address2'=>'required',
             'city'=>'required',
             'state'=>'required',
             'zip'=>'required'
          ]);
            $data = new Registeruser();
            $data->name=$request->name;
            $data->email=$request->email;
            $data->password= Hash::make($request->password);
            $data->address=$request->address;
            $data->address2=$request->address;
            $data->city=$request->city;
            $data->state=$request->state;
            $data->zip=$request->zip;
            $data->save();
            mail::to($request->email)->send(new Welcome());
            return view('login');


       }
}
