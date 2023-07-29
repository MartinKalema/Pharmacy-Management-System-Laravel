<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Administrator;
use App\Models\Supplier;
use App\Models\Cashier;
use App\Models\Drug;
use App\Models\Sales_detail;

class AdminController extends Controller
{
    function validateFormData(Request $loginData)
    {

        $loginData->validate(
            [
                'username'=>'required',
                'password'=>'required| min:8'
            ]
        );

        if(Auth::attempt($loginData->only('username', 'password'))){
            session()->start();
            return redirect('admin-index');
        } else{

            return redirect()->back()->withErrors(['username'=>'Invalid Username or Password']);
        }

    }

    function display(){
        $drugCount = Drug::count();
        $cashierCount = Cashier::count();
        $supplierCount = Supplier::count();

        $sales = DB::table('sales_details')->select('medicineName', 
                          DB::raw('SUM(quantity) as totalQuantity'), 'price', DB::raw('SUM(quantity*price) as totalAmount'))
                          ->groupBy('medicineName', 'price')
                          ->orderBy('totalQuantity', 'desc')
                          ->limit(5)
                          ->get();

        return view('admin-index', compact('drugCount', 'cashierCount', 'supplierCount', 'sales'));
    }

    function report(){
        $sales = DB::table('sales_details')->select('cashierName', 
                          DB::raw('SUM(totalAmount) as totalGenerated'))
                          ->where('date', now()->format('Y-m-d'))
                          ->groupBy('cashierName')->get();

        $tot = Sales_detail::where('date', now()->format('Y-m-d'))->sum('totalAmount');
        $total = number_format($tot, 2);
        return view('report', compact('sales', 'total'));
    }

    function seeSales(){
        $sales = Sales_detail::all();
        $now = now()->format('Y-m-d');
        return view('sales-detail', compact('sales','now'));
    }
    
}
