<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    public $table = 'panier';
    public $primaryKey='id';
    public $incrementing = true;
    public $timestamps= false;
}
