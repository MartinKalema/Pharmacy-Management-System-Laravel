<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Sales_detail;
use App\Models\Drug;
use App\Models\Company;

class salesController extends Controller
{
    function showMeds(){
        
        $data = Drug::all();

        $company = Company::find(1);

        return view('cashier-sales', ['drugs'=>$data, 'company'=>$company]);

    }

    function saveSales(Request $request){
        
        $user = Auth::user();
        $date= now()->format('Y-m-d');
        //Query the database for the selected drug
        $item = Drug::where('name', $request->medicineName)->first();

        //check for quantity conflicts
        if($request->quantity > $item->quantity){
            return redirect()->back()->withErrors(['quantity'=> 'Requested quantity is greater than the available quantity']);
        }

         //Saving sale into database.
         $saledetail = New Sales_detail;
         $saledetail->salesNo = $request->salesNo;
         $saledetail->medicineName = $request->medicineName;
         $saledetail->price = $request->price;
         $saledetail->quantity = $request->quantity;
         $saledetail->discount = $request->discount;
         $saledetail->cashierName = $user->username;
         $saledetail->paymentType = $request->paymentType;
         $saledetail->totalAmount = $request->totalAmount;
         $saledetail->date = $date;
         $saledetail->save();

         //Updating drug quantity
         $itemQuantity = $item->quantity;
         $quantitySold = $request->quantity;
         $remainder = $itemQuantity - $quantitySold;
         $item->quantity = $remainder;
         $item->save();

        

        return redirect('dailySales');
        

    }

    function showDailySales(){
       
        $user = Auth::user();
        $username = $user->username;

        $now = now()->format('Y-m-d');

        $sales = Sales_detail::where('cashierName', $username)->where('date', $now)->get();
        return view('cashier-daily-sales', compact('sales', 'now'));
    }

    function onDashboard(){
       
        $user = Auth::user();
        $username = $user->username;

        $totalSales = Sales_detail::where('cashierName', $username)->count();

        $numberOfSales = Sales_detail::where('cashierName', $username)->where('date', now()->format('Y-m-d'))->count();

        $sales = DB::table('sales_details')->select('medicineName', 
                          DB::raw('SUM(quantity) as totalQuantity'), 'price', DB::raw('SUM(quantity*price) as totalAmount'))
                          ->groupBy('medicineName', 'price')
                          ->orderBy('totalQuantity', 'desc')
                          ->limit(5)
                          ->get();

        return view('cashier-index', compact('totalSales', 'numberOfSales', 'sales'));
        
    }

    function removeSale($id){
       
        $data = Sales_detail::find($id);
        $data->delete();
        return redirect('sales-detail');
    }

    function showSavedData($id){
        
        $data = Sales_detail::find($id);
        return view('edit-sale', ['data'=>$data]);
    }

    function editSaleInfo(Request $request){
       
        $data = Sales_detail::find($request->id);
        $data->quantity = $request->quantity;
        $data->totalAmount = $request->totalAmount;
        $data->save();
        return redirect('sales-detail');

    }

    
}
