<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
   {
     return view('index');
   }
   
   public function show()
   {
     return view('index',[
      "tasks" => DB::table('tasks')->orderBy('id','desc')->get(),
      ]);
   }
   
   public function add(Request $request)
   {
     DB::table('tasks')->insert([
       "list" => $request->list,
      ]);
      return back();
   }
   
   public function edit($id)
   {
     $tasks = DB::table('tasks')->where('id',$id)->first();
     return view('edit',["tasks" => $tasks]);
     
   }
   
   public function update(Request $request, $id)
   {
     DB::table('tasks')->where('id',$id)->update([
       "list" => $request->list,
     ]);
     return redirect('/');
   }
   
   public function destroy($id)
   {
     DB::table('tasks')->where('id',$id)->delete();
     return redirect('/');
   }
   
}
