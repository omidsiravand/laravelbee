<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\seorequest;
use App\Models\seo;
use Illuminate\Http\Request;



class admincontroller extends Controller
{
    public function index(){
        return view('dashbord.admin.index');
    }
    public function store(seorequest $request){
        seo::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'keywords'=>$request->keywords,
            'outhor'=>$request->outhor,
        ]);
        session()->flash('create','عملیات با موفقیت انجام شد');
        return back();
    }
    public function showseo(){
        $query=seo::paginate(3);
        return view('dashbord.seo.index',compact('query'));
    }
    public function destroy($id){
      seo::destroy($id);
      session()->flash('delete','عملیات حذف انجام شد');
      return back();
    }
}
