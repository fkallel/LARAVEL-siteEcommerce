<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_comments extends Model
{
    public $customer_comments = 'customer_comments';
    public $primaryKey='id';
    public $incrementing = true;
    public $timestamps= false;
}
