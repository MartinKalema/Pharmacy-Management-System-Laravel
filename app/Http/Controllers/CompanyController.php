<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    function saveCompanyDetails(Request $request){
        
        $company = New Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->contact = $request->contact;
        $company->address = $request->address;
        $company->save();

        return redirect()->back()->withErrors(['success'=> 'Details updated successfully']);
    }
}
