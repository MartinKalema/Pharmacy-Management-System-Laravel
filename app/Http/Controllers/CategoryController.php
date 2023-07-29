<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function addCategory(Request $categoryData){
        $category = New Category;
        $category->name = $categoryData->name;
        $category->description = $categoryData->description;
        $category->save();


        return redirect('categories');
    }

    function showCategories(){
        $data = Category::all();
        return view('category', ['categories'=>$data]);
    }

    function removeCategory($id){
        $data = Category::find($id);
        $data->delete();
        return redirect('categories');
    }

    function showSavedData($id){
        $data = Category::find($id);
        return view('edit-category', ['data'=>$data]);
    }

    function editCategoryInfo(Request $request){
        $data = Category::find($request->id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect('categories');
    }
}
