<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drug;
use App\Models\Supplier;
use App\Models\Category;

class DrugsController extends Controller
{
    function dropDown(){
        $suppliers = Supplier::all();
        $categories = Category::all();

        return view('add-medicine', compact('suppliers', 'categories'));
    }
    function retrieveSuppliers(){
        $data = Supplier::all();
        return view('add-medicine', ['suppliers'=>$data]);
    }

    function retrieveCategories(){
        $data = Category::all();
        return view('add-medicine', ['categories'=>$data]);
    }

    function showDrugs(){
        $data = Drug::all();
        return view('medicine', ['drugs'=> $data]);
    }

    function showSavedData($id){
        $suppliers = Supplier::all();
        $categories = Category::all();
        $data = Drug::find($id);
        return view('edit-medicine', compact('data', 'suppliers', 'categories'));
    }

    function removeDrug($id){
        $data = Drug::find($id);
        $data->delete();
        return redirect('medicine2');
    }

    function addDrug(Request $drugData){
        $drug = New Drug;
        $drug->code = $drugData->code;
        $drug-> category = $drugData->category;
        $drug-> supplier = $drugData->supplier;
        $drug->name = $drugData->name;
        $drug->description = $drugData->description;
        $drug-> genericName = $drugData->genericName;
        $drug-> purchasePrice = $drugData->purchasePrice;
        $drug-> retailPrice = $drugData->retailPrice;
        $drug-> quantity = $drugData->quantity;
        $drug-> unit = $drugData->unit;
        $drug-> expiry = $drugData->expiry;
        $drug->save();


        return redirect('medicine2');
    }

    function editDrugInfo(Request $request){
        $drug = Drug::find($request->id);
        $drug->code = $request->code;
        $drug->category = $request->category;
        $drug->supplier = $request->supplier;
        $drug->name = $request->name;
        $drug->description = $request->description;
        $drug->genericName = $request->genericName;
        $drug->purchasePrice = $request->purchasePrice;
        $drug->retailPrice = $request->retailPrice;
        $drug->quantity = $request->quantity;
        $drug->unit = $request->unit;
        $drug->expiry = $request->expiry;
        $drug->save();
        return redirect('medicine2');
    }

   
}
