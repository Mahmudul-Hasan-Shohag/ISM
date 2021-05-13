<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showcategory(){
$category_list=Category::all();
        return view('backend.layouts.productdetails.category.categories',compact('category_list'));
    }
public function categoryform(){

    return view('backend.layouts.productdetails.category.categoryform');
    return redirect()->back();
}

    public function createcategory(Request $request){

        $filename='';
        if($request->hasFile('category_image'))
        {
            //some code here to store into directory
                $file = $request->file('category_image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('category', $filename);
                }
}
Category::create([

    'category_name'=>$request->category_name,
    'category_description'=>$request->category_description,
    'category_image'=>$filename
    ]);
    return redirect()->route('category.show');


    }
    public function categorydelete($id){
$category=Category::find($id);
$category->delete();
return redirect()->back()->with('message','Category deleted successfully');
    }

    public function categoryedit($id){
        $category=Category::find($id);
        return view('backend.layouts.productdetails.category.categoryedit',compact('category'));
    }
    public function categoryupdate(Request $request,$id){
        Category::find($id)->update([
            'category_name'=>$request->category_name,
            'category_description'=>$request->category_description,

        ]);
        return redirect()->route('category.show')->with('message','Product updated successfully!');
    }
}

