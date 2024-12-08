<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Http\Request;

class commentcontroller extends Controller
{
    public function index(){
   $comment=comment::paginate(4);
   return view('dashbord.comment.index',compact('comment'));
    }
    public function delete($id){
     comment::destroy($id);
     return back();
         }
}
