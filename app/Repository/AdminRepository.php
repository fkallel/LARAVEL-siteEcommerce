<?php


namespace App\Repository;

use App\Models\Client;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Customer_comments;
use App\Models\Panier;
use App\Models\User;

use Illuminate\Support\Facades\Log;

class AdminRepository implements IAdminRepository {

        public function adminGetAllProducts()
        {
            return product::all();
        }

        public function adminGetAllContacts(){
        return Customer_comments::all();
        }
        public function adminGetAllCommands(){
            return Panier::all();
            }
        public function adminDeleteAllproduct($id){
            return product::find($id)->delete();
        }
        public function adminDeleteAlluser($id){
            return user::find($id)->delete();
        }

        public function adminDeleteComment($id){


        }





}







?>
