<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the first 10 products and return it to the product list page
        $products = DB::select('select * from Products LIMIT 10');
        return view('wines.list', ['products' => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('Products')->insert([
            'prodName' => $request->prodName,
            'prodColorID' => $request->prodColorID,
            'prodPack' => $request->prodPack,
            'prodQtyBuy' => $request->prodQtyBuy,
            'prodSoldOut' => $request->prodSoldOut,
            'prodAvailable' => $request->prodAvailable
        ]);

        return redirect('wines');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get the first product item from id and return it to the view
        $product = DB::table('Products')->where('prodID', $id)->first();
        return view('wines.show', ['product' => $product]);
    }

}
