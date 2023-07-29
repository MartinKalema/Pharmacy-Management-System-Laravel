<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class deleteSupplier extends Controller
{
    function removeSupplier($id){
        $data = Supplier::find($id);
        $data->delete();
        return redirect('supplier');
    }

    function showSavedData($id){
        $data = Supplier::find($id);
        return view('edit-supplier', ['data'=>$data]);
    }

   
}
