<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'picture','title','price','descritpion'
    ];
    public function client() {
        return $this->hasMany(Client::class); //RELATION ENTREEE PRODUIT ET CLIENTS

    }
}
