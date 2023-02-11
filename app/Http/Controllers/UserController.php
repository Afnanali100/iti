<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
  public function main(){
    $users=User::get();
    return view('users\users',["users"=>$users]);
  }
public function show($id){
    // dd($id);
$user=User::find($id);
return view('users\show',['user'=>$user]);
}
public function destroy($id){
//   $user=User::where('id',$id)->delete();
$user=User::find($id);
$user->destroy($id);
  return redirect()->route('users.index');
}
public function edit($id){
 $user=User::where('id',$id)->first();
   return view ('users\edit',['user'=>$user]);
}
public function update(Request $data, $id){
$user=User::find($id);
$user->update($data->except('_method', '_token'));
return redirect()->route('users.index');
}
public function create(){
return view('users\create');
}
public function store(request $data){
  User::create($data->except('_token'));
  return redirect()->route('users.index');
}






}
