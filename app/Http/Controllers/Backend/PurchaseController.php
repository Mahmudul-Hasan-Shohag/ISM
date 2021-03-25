<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(){
        return view("backend.layouts.purchaseitems.purchase");
    }
    public function add(){
        return view("backend.layouts.purchaseitems.add");
    }

}
