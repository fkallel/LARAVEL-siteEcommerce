<?php


namespace App\Repository;
use App\Models\Client;

use Illuminate\Support\Facades\Log;
class ClientRepository implements IClientRepository {
       public function getAllClient()
       {
        return Client::all();
       }
       public function createClient(array $data){
        log::info("Message here");



         Client::insert([
            'nomclient' => $data['nomclient'],
            'prenomclient' => $data['prenomclient'],
            'emailclient' => $data['emailclient'],
            'telclient'=> $data['telclient'],
            'id_product'=> $data['id_client'],

         ]);

       }
       public function getSingleClient($id){
         return Client::find($id);
       }
       public function editClient($id){
         return Client::find($id);
       }
       public function updateClient($id, array $data){
        Client::find($id)->update([
            'nomclient' => $data['nomclient'],
            'prenomclient' => $data['prenomclient'],
            'emailclient' => $data['emailclient'],
            'telclient'=> $data['telclient'],
            'id_product'=> $data['id_client'],

         ]);


       }


}







?>
