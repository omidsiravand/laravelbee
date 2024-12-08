<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\aboutreqiest;
use App\Http\Requests\aboutupdatereqiest;
use App\Models\about;
use Illuminate\Http\Request;

class aboutcontroller extends Controller
{
 
    public function index()
    {
        $about=about::paginate(3);
        return view('dashbord.about.index',compact('about'));
    }

   
    public function create()
    {
        return view('dashbord/about/create');
    }

    
    public function store(aboutreqiest $request)
    {
      $file=$request->file('image');
      $image="";
      if(!empty($file)){
        $image= sha1(time()).".". $file->getClientOriginalExtension();
        $file->move('images/about',$image);
      }
      about::create([
          'description'=>$request->description,
          'image'=>$image,
      ]);
      session()->flash('create','ذخیره شد');
      return back();
    }

   
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $about=about::findOrFail($id);
        return view('dashbord.about.edit',compact('about'));
    }

   
    public function update(aboutupdatereqiest $request, string $id)
    {
       $imagedelete=about::findOrFail($id)->image;
       $file=$request->file('image');
       $image="";
       if(!empty($file)){
        if(file_exists('images/about/'.$imagedelete)){
            unlink('images/about/'.$imagedelete);
        }
        $image=sha1(time()).".". $file->getClientOriginalExtension();
        $file->move('images/about',$image);
       }else{
        $image=$imagedelete;
       }
       about::findOrFail($id)->update([
        'description'=>$request->description,
        'image'=>$image,
       ]);
       session()->flash('update','اپدیت انجام شد');
       return redirect()->route('about.index');
    }

 
    public function destroy(string $id)
    {
       $imagedelete=about::findOrFail($id)->image;
       if(file_exists('images/about/'.$imagedelete)){
        unlink('images/about/'.$imagedelete);
       }
       about::destroy($id);
       session()->flash('delete','عملیات حذف انجام شد');
       return back();
    }
}
