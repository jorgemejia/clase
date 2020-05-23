<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;

class ShowProducts extends Controller
{
    //
    public function get_products($id){
        $store = Stores::with(['products'])->where('id', $id)->get()->toArray();
        dd($store);
    }
}
