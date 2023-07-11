<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function __construct(Products $product){

        $this->product = $product;

    }
    public function index(Request $request){
        
        $search = $request->search;
        $findProduct = $this->product->getProductsSearchIndex(fieldSearch: $search ?? '');
       
        return view('pages.products.pagination', compact('findProduct'));
    }

    public function delete(Request $request){

        return response()->json(['success' => true]);
    }
}
