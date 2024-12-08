<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\menurequest;
use App\Http\Requests\menuupdaterequest;
use App\Models\menu;
use Illuminate\Http\Request;

class menucontroller extends Controller
{
  
    public function index()
    {
        $menu=menu::paginate(4);
        return view('dashbord.menu.index',compact('menu'));
    }

    
    public function create()
    {
        return view('dashbord.menu.create');
    }

   
    public function store(menurequest $request)
    {
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/menu',$image);
        }
        menu::create([
            'title1'=>$request->title1,
            'p'=>$request->p,
            'title'=>$request->title,
            'description'=>$request->description,
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
        $menu=menu::findOrFail($id);
        return view('dashbord.menu.edit',compact('menu'));
    }

    
    public function update(menuupdaterequest $request, string $id)
    {
        $imagedelete=menu::findOrFail($id)->image;
        $file=$request->file('image');
        $image="";
        if(!empty($file)){
            if(file_exists('images/menu/'.$imagedelete)){
                unlink('images/menu/'.$imagedelete);
            }
            $image=sha1(time()).".". $file->getClientOriginalExtension();
            $file->move('images/menu',$image);
        }else{
            $image=$imagedelete;
        }
        menu::findOrFail($id)->update([
            'title1'=>$request->title1,
            'p'=>$request->p,
            'title'=>$request->title,
            'description'=>$request->description,
            'image'=>$image,
        ]);
        session()->flash('update','اپدیت انجام شد');
        return redirect()->route('menu.index');
    }

 
    public function destroy(string $id)
    {
        $imagedelete=menu::findOrFail($id)->image;
        if(file_exists('images/menu/'.$imagedelete)){
            unlink('images/menu/'.$imagedelete);
        }
        menu::destroy($id);
        session()->flash('delete','عملیات حذف انجام شد');
        return back();
    }
}
