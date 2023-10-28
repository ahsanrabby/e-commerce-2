<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category.index',[
            'subcategories'=>SubCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category.create',[
            'categories'=>Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubCategory::storeData($request);
        return redirect('/sub-categories')->with('message','new data added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function changeStatus(SubCategory $subCategory)
    {
        if($subCategory->status==1){
            $subCategory->update(['status'=>0]);
        }
        else{
            $subCategory->update(['status'=>1]);
        }
        return back()->with('message','status changed successfully');


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        return view('admin.sub-category.edit',[
            'subCategory'=>SubCategory::find($id),
            'categories'=>Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        SubCategory::updateData($request,$id);
        return redirect('/sub-categories')->with('message','Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
      SubCategory::deleteData($request->id);
      return back()->with('message','data deleted successfully');
    }
}
