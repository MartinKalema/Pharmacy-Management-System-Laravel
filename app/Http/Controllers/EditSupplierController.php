<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class EditSupplierController extends Controller
{
    function editSupplierInfo(Request $request){
        $data = Supplier::find($request->id);
        $data->name = $request->name;
        $data->contact = $request->contact;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();
        return redirect('supplier');
    }
}
