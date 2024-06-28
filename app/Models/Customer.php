<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
        // model is used take the data from the database 
    use HasFactory;
    use SoftDeletes;

    protected $table="customers";
    //primaryKey
    protected $primaryKey="customers_id";
    

    //mutator method
    public function setnameAttribute($value){
        $this->attributes['name']=strtolower($value);
    }
    public function setemailAttribute($value){
        $this->attributes['email']=strtolower($value);
    }
    public function setadressAttribute($value){
        $this->attributes['adress']=strtolower($value);
    }
    public function setstateAttribute($value){
        $this->attributes['state']=strtolower($value);
    }
    public function setcountryAttribute($value){
        $this->attributes['country']=strtolower($value);
    }

    public function setpasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }

    //acessor method
    public function getdobAttribute($value){
            return date('D M Y',strtotime($value));
        }
  public function getnameAttribute($value){
            return ucwords($value);
        }
}
