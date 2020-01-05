<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','price','toppings',];

    public function store(){
        return $this->belongsTo('App\Store');
    }
}
