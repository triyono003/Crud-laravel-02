<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Task;

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
     Task::insert([
       "list" => $request->list,
      ]);
      return back();
   }
   
   public function edit($id)
   {
     $tasks = Task::where('id',$id)->first();
     return view('edit',["tasks" => $tasks]);
     
   }
   
   public function update(Request $request, $id)
   {
     Task::where('id',$id)->update([
       "list" => $request->list,
     ]);
     return redirect('/');
   }
   
   public function destroy($id)
   {
     Task::where('id',$id)->delete();
     return redirect('/');
   }
   
}
