<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Select 5 products from the Products table in database
        $products = DB::select('select prodID, prodNum, prodName, prodColorID, prodPack from Products LIMIT 5');

        // Return a selection of products as JSON resource
        return json_encode($products);
    }
}
