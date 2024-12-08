<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\galleryrequest;
use App\Http\Requests\galleryupdaterequest;
use App\Models\gallery;
use Illuminate\Http\Request;

class gallerycontroller extends Controller
{

    public function index()
    {
        $gallery=gallery::paginate(6);
        return view('dashbord.gallery.index',compact('gallery'));
    }

    
    public function create()
    {
        return view('dashbord.gallery.create');
    }

    public function store(galleryrequest $request)
    {
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/gallery',$image);
        }
        gallery::create([
            'caption'=>$request->caption,
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
        $gallery=gallery::findOrFail($id);
        return view('dashbord.gallery.edit',compact('gallery'));
    }

    public function update(galleryupdaterequest $request, string $id)
    {
        $imagedelete=gallery::findOrFail($id)->image;
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            if(file_exists('images/gallery/'.$imagedelete)){
                unlink('images/gallery/'.$imagedelete);
            }
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/gallery',$image);
        }else{
            $image=$imagedelete;
        }
        gallery::findOrFail($id)->update([
            'caption'=>$request->caption,
            'image'=>$image,
        ]);
        session()->flash('update','اپدیت انجام شد');
        return redirect()->route('gallery.index');
    }

    public function destroy(string $id)
    {
        $imagedelete=gallery::findOrFail($id)->image;
        if(file_exists('images/gallery/'.$imagedelete)){
            unlink('images/gallery/'.$imagedelete);
        }
        gallery::destroy($id);
        session()->flash('delete','عملیات حذف انجام شد');
        return back();
    }
}
