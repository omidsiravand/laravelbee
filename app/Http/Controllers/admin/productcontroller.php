<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\productrequest;
use App\Http\Requests\productupdaterequest;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
  
    public function index()
    {
        $product=product::with('category')->paginate(4);
        return view('dashbord.pro.index',compact('product'));
    }

    public function create()
    {
        $catecory=category::pluck('id','title');
        return view('dashbord.pro.create',compact('catecory'));
    }

    public function store(productrequest $request)
    {
     
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/product',$image);
        }
        product::create([
            'title'=>$request->title,
            'image'=>$image,
            'category_id'=>$request->category_id,
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
        $product=product::findorfail($id);
        $catecory=category::pluck('id','title');
        return view('dashbord.pro.edit',compact('product','catecory'));
    }

   
    public function update(productupdaterequest $request, string $id)
    {
        $imagedelete=product::findOrFail($id)->image;
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            if(file_exists('images/product/'.$imagedelete)){
                unlink('images/product/'.$imagedelete);
            }
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/product',$image);
        }else{
            $image=$imagedelete;
        }
        product::findOrFail($id)->update([
            'title'=>$request->title,
            'image'=>$image,
            'category_id'=>$request->category_id,
        ]);
        session()->flash('update','اپدیت انجام شد');
        return redirect()->route('product.index');
    }

    public function destroy(string $id)
    {
        $imagedelete=product::findOrFail($id)->image;
        if(file_exists('images/product/'.$imagedelete)){
            unlink('images/product/'.$imagedelete);
        }
        product::destroy($id);
        session()->flash('delete','عملیات حذف انجام شد');
        return back();
    }
}
