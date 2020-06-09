<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stores;
use App\Products;

class ShowProducts extends Controller
{
    //
    public function get_products($id){
        $products = Stores::with(['products'])->where('id', $id)->get()->toArray();
        return view('pages.home', ['products' => $products[0]["products"] ] );
    }

    public function save( Request $request ){

        if( $request ){
            $product = new Products;

            $product->name = $request->name;
            $product->description = $request->description;
            $product->store_id = $request->store_id;
            $product->amount = $request->amount;

            if( $product->save() ) {
                return response()->json(["success" => "Datos Guardados correctamente"], 200);
            }
        }



    }
}