<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function liste(){
        $user=User::all();

        return view('liste',compact('user'));
    }
    public function search(){
        $q= request()->input('q');
        $users=User::where('name','like',"%$q%")
        ->orWhere('email','like',"%$q%")
        ->paginate(6);
    return view('liste')->with('users',$users);
    }
}
