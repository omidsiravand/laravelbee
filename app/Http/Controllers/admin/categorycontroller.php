<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryrequestque;
use App\Http\Requests\categoryupdaterequest;
use App\Models\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
   
    public function index()
    {
        $category=category::paginate(3);
        return view('dashbord.category.index',compact('category'));
    }

    public function create()
    {
       
        return view('dashbord.category.cretae');
    }

   
    public function store(categoryrequestque $request)
    {
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/category',$image);
        }
        category::create([
            'title'=>$request->title,
            'image'=>$image,
        ]);
        session()->flash('create','ذخیر شد');
        return back();
    }

    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        $category=category::findOrFail($id);
        return view('dashbord.category.edit',compact('category'));
    }

   
    public function update(categoryupdaterequest $request, string $id)
    {
        $imagedelete=category::findOrFail($id)->image;
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            if(file_exists('images/category/'.$imagedelete)){
                unlink('images/category/'.$imagedelete);
            }
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/category',$image);
        }else{
            $image=$imagedelete;
        }
        category::findOrFail($id)->update([
            'caption'=>$request->caption,
            'image'=>$image,
        ]);
        session()->flash('update','اپدیت انجام شد');
        return redirect()->route('category.index');
    }

 
    public function destroy(string $id)
    {
        $imagedelete=category::findOrFail($id)->image;
        if(file_exists('images/category/'.$imagedelete)){
            unlink('images/category/'.$imagedelete);
        }
        category::destroy($id);
        session()->flash('delete','عملیات حذف انجام شد');
        return back();
    }
}
