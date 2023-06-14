<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;

class PanierController extends Controller
{
    //
    function PanierIndex(){
        return view('home');

    }
    function DataInsert(Request $request){
        $nomclient=$request->input('nomclient');
        $prenomclient=$request->input('prenomclient');
        $emailclient=$request->input('emailclient');
        $telclient=$request->input('telclient');
        $id_product=$request->input('id_product');

        $isInsertSuccess= Panier::insert([
            'nomclient'=>$nomclient,
            'prenomclient'=>$prenomclient,
            'emailclient'=>$emailclient,
            'telclient'=>$telclient,
            'id_product'=>$id_product,
        ]);
        if($isInsertSuccess) {echo'<h1> insert  panier suceeed</h1>';
            return view('product.panier');}
         else echo'<h1> insert panier failed </h1>';
            }

    }

