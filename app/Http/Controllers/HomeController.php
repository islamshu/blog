<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Notifications\LaravelTelegramNotification;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    
   
   
    public function login_dashboard(){
        return view('dashboard.auth.login');
    }
    public function login_dashboard_post(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with(['error' => 'البيانات غير متطابقة مع سجلاتنا']);
        }
    }
    public function blogs(){
        return view('blogs')->with('blogs',Blog::orderby('id','desc')->simplePaginate(9));
    }
    public function blog($id){
        return view('blog')->with('blog',Blog::find($id));
    }
    public function dashboard()
    {
        return view('dashboard.index');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('first');
    }
    public function edit_profile(){
        return view('dashboard.auth.profile')->with('user',auth()->user());  
    }
    public function update_profile(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
        ]);
        if($request->password != null){
            $request->validate([
            'password'=>'required',
            'confirm-password'=>'same:password'
        ]);}
        $user = auth()->user();
        $user->name= $request->name;
        $user->email= $request->email;
        if($request->password != null){
            $user->password= bcrypt($request->password );
        }
        $user->save();
        return redirect()->back()->with(['success'=>'تم التعديل بنجاح']);

        }
    }

