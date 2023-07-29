<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class RetrieveSuppliersController extends Controller
{
    function showSuppliers(){
        $data = Supplier::all();
        return view('supplier', ['members'=>$data]);
    }

    
}
