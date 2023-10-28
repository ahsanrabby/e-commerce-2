<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('admin.brand.create');
    }

    public function saveBrand(Request $request)
    {
       Brand::saveData($request);
       return redirect('/manage-brand')->with('message','New Brand Create Successfully');
    }

    public function index()
    {
        return view('admin.brand.index',[
            'brands'=>Brand::all()
        ]);
    }
    public function editBrand($id)
    {
        return view('admin.brand.edit',
        [
            'brand'=>Brand::find($id)
        ]);
    }
    public function deleteBrand(Request $request)
    {
        Brand::deleteData($request);
        return back()->with('message','Data Deleted Successfully !');
    }
}
