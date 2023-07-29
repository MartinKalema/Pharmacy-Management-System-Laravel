<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    function addSupplier(Request $supplierData){
        $supplier = New Supplier;
        $supplier->name = $supplierData->name;
        $supplier->contact = $supplierData->contact;
        $supplier->email = $supplierData->email;
        $supplier-> address = $supplierData->address;
        $supplier->save();


        return redirect('supplier');
    }
}
