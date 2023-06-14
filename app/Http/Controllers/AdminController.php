<?php

namespace App\Http\Controllers;

use App\Repository\IAdminRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $admin;
    public function __construct(IAdminRepository $admin)
    {
       $this->admin= $admin;
    }
    public function adminGetAllProducts(){
        $products=$this->admin->adminGetAllProducts();
        return view('admin.products')->with('products',$products);
    }
    public function adminGetAllCommands(){
        $commands=$this->admin->adminGetAllCommands();
        return view('admin.panier')->with('panier',$commands);
    }
    public function adminGetAllContacts(){
        $contacts=$this->admin->adminGetAllContacts();
        return view('admin.contacts')->with('contacts',$contacts);

    }


    public function adminDeleteProduct($id){
        $this->admin->adminDeleteAllProduct($id);
        return redirect('/admin/products');
    }
    public function adminDeleteUser($id){
        $this->admin->adminDeleteAllUser($id);
        return redirect('/admin/products');
    }
    public function user(){
        return view('liste');
    }




}

