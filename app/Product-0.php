<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable=['name','description','Type','TypeProduct','price','image','quantity','categoryID'];

    public function category(){

        return $this->belongTo('App\Category');
        
    }
}
