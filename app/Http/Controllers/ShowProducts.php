<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;

class ShowProducts extends Controller
{
    //
    public function get_products($id){
        $products = Stores::with(['products'])->where('id', $id)->get()->toArray();
        return view('pages.home', ['products' => $products[0]["products"] ] );
    }
}
