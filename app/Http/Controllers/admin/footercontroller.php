<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\footerrequest;
use App\Models\footer;
use Illuminate\Http\Request;

class footercontroller extends Controller
{
   
    public function index()
    {
        $footer=footer::paginate(4);
        return view('dashbord.footer.index',compact('footer'));
    }

    public function create()
    {
        
        return view('dashbord.footer.create');
    }

    
    public function store(footerrequest $request)
    {
         footer::create([
            'telgram'=>$request->telgram,
            'insta'=>$request->insta,
            'watsap'=>$request->watsap,
            'youtuob'=>$request->youtuob,
            'p'=>$request->p,
            'h1'=>$request->h1,
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
        $footer=footer::findOrFail($id);
        return view('dashbord.footer.edit',compact('footer'));
    }

   
    public function update(Request $request, string $id)
    {
        footer::findOrFail($id)->update([
            'telgram'=>$request->telgram,
            'insta'=>$request->insta,
            'watsap'=>$request->watsap,
            'youtuob'=>$request->youtuob,
            'p'=>$request->p,
            'h1'=>$request->h1,
        ]);
        session()->flash('update','اپدیت انجام شد');
        return redirect()->route('footer.index');
    }

    
    public function destroy(string $id)
    {
        footer::destroy($id);
        return back();
    }
}
