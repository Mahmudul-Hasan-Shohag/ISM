<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function showstock(){
        $stocks=Stock::with('productStock')->get();
        return view('backend.layouts.productdetails.stocks.stockshow',compact('stocks'));
}
    
}
