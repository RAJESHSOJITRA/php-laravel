<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
        
        // model is used take the data from the database 
    use HasFactory;
    protected $table="customers";
    protected $primerykey="customers_id";
}
