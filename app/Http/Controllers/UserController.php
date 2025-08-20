<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
class UserController extends Controller
{
    public function index(){
    $users = User::paginate(2); 
    return response()->json($users, 200);
}

    public function store(StoreUserRequest $request)
{
    return User::create($request->validated());
}


    public function update(UpdateUserRequest $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->validated());
    return response()->json($user, 200);
}

      public function destroy($id){
        $users=User::findorfail($id);
         $users->delete();
 return response()->json(null, 204);   
 }
}