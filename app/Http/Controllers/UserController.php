<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
 return response()->json($users, 200);   
 }
    public function store(Request $request)
    {
        return User::create([
           "name" => $request->name,
            "email" => $request->email,
             "password" => $request->password,
             "avater_path"=>$request->avater_path,
        ]);
    }

    public function update(Request $request, $id)
    {
        return User::where('id', $id)->update([
           "name" => $request->name,
            "email" => $request->email,
             "password" => $request->password,
             "avater_path"=>$request->avater_path,
        ]);
    }
      public function destroy($id){
        $users=User::findorfail($id);
         $users->delete();
 return response()->json(null, 204);   
 }
}
