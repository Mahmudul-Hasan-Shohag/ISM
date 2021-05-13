<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Order;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function purchasereport(){
        $purchase=[];
        if(isset($_GET['from_date'])){

             $from_date=date('Y-m-d',strtotime($_GET['from_date']));
             $to_date=date('Y-m-d',strtotime($_GET['to_date']));
            $purchase=Purchase::whereBetween('purchase_date',[$from_date,$to_date])->get();
            
        }
        
        return view('backend.layouts.report.purchase',compact('purchase'));
    }

    public function ordersreport(){
        $order=[];
        if(isset($_GET['from_date'])){

            $from_date=date('d-m-Y',strtotime($_GET['from_date']));
            $to_date=date('d-m-Y',strtotime($_GET['to_date']));
            
           $order=Order::whereBetween('order_date',[$from_date,$to_date])->get();
           
       }
        
        return view('backend.layouts.report.orders',compact('order'));
    }

}
