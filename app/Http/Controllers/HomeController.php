<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Customer_comments;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    function DataInsert(Request $request){
        $name=$request->input('name');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $subject=$request->input('subject');
        $message=$request->input('message');

        $isInsertSuccess= Customer_comments::insert([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'subject'=>$subject,
            'message'=>$message,





        ]);

 if($isInsertSuccess) {echo'<h1> insert suceeed</h1>';
    return view('home');}
 else echo'<h1> insert failed </h1>';
    }

    public function panier(){
        return view('product.panier');
    }

}
