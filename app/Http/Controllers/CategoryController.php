<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories= Category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      Category::storeData($request);
      return redirect('/categories')->with('message','Category Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function changeStatus(Category $category)
    {
        if($category->status==1)
        {
            $category->update(['status'=>0]);
        }
        else
            {
            $category->update(['status'=>1]);
        }
        return back()->with('message','status changed successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id )
    {
        return view('admin.category.edit',['category'=>Category::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        Category::categoryUpdate($request,$id);
        return redirect('/categories')->with('message','Category updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Category::deleteData( $request->id);
        return back()->with('message','Category Deleted Successfully!');
    }
}
