<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\category;
use App\Models\comment;
use App\Models\footer;
use App\Models\gallery;
use App\Models\menu;
use App\Models\product;
use App\Models\seo;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){
        $seo=seo::orderBy('id','desc')->first();
        $menu=menu::orderBy('id','desc')->first();
        $about=about::orderBy('id','desc')->first();
        $gallery=gallery::orderBy('id','desc')->limit(6)->get();
        $category=category::all();
        $footer=footer::orderBy('id','desc')->first();
        return view('front.index',compact('seo','menu','about','gallery','category','footer'));
    }
    public function pro($id){
        $category=category::all();
        $product=category::findOrFail($id)->product()->paginate(3);
        return view('front.produact',compact('product','category'));
    }
    public function ajax(request $request){
        comment::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'comment'=>$request->com,
        ]);
        return 1;
    }
}
