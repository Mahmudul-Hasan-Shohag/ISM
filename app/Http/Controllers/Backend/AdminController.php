<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminlogin(){

        return view('backend.login');
    }
    public function postadminlogin(Request $request){
        //dd($request->all());
        $request->validate([
         
            'email'=>'email|required',
            'password'=>'required'
        ]);
        
        $credentials = $request->only('email', 'password');
        
                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
        
                    return redirect()->route('home');
                }
        
                return back()->withErrors([
                    'email' => 'Invalid username or password',
                ]);
        
        }
        public function adminlogout(){
            
    Auth::logout();
    return redirect()->route('admin.login')->with('message','You have logged out Successfully'); 
        }
        
}
