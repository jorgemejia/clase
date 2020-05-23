<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $table = 'products';

    public function store(){
        return $this->belongsToMany('App\Stores', 'id');
    }
    
}
