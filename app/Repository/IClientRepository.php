<?php


namespace App\Repository;

interface IClientRepository {
    public function getAllClient();
    public function CreateClient(array $data);
    public function getSingleClient($id);
    public function editClient($id);
    public function updateClient($id,array $data);
}







?>
