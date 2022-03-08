<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noOfItems = config('ecom.ITEMS_PER_PAGE');
        
        $products= Product::paginate($noOfItems);
        
        return view('product', compact('products'));
    }
}
