<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AuthController extends Controller
{

public function processregister(Request $request){

$this->validdate($request,[
'user_name'=>'required',
'user_email'=>'required|email',
'password'=>'required|min:8|confirmed'

]);
$data=[
'user_name'=>$request->user_name,
'user_email'=>strtolower ($request)->user_email,
'user_password'=>bcrypt($request)->user_password
];
echo 'SUCCESS';

}
    public function showlogin(){

      return view('backend.login')  ;
    }
    public function processlogin()
    {

    }
}
