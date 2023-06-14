<?php

namespace App\Repository;

interface IAdminRepository {


    public function adminGetAllProducts();
    public function adminGetAllContacts();
    public function adminGetAllCommands();
    public function adminDeleteAlluser($id);

    public function adminDeleteAllproduct($id);


   // public function adminDeleteComment($id);




}









?>
