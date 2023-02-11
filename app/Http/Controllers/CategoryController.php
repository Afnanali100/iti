<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::paginate(7);
        return view('categories.index', ['categories' => $categories]);
    }
    public function show($id)
    {
        $category = Category::find($id);
        return view('categories\show', ['category' => $category]);
    }
public function destroy($id){
//   $user=User::where('id',$id)->delete();
$cat=Category::find($id);
$cat->destroy($id);
  return redirect()->route('category.index');
}

public function update(Request $data, $id){
$cat=Category::find($id);
$cat->update($data->except('_method', '_token'));
return redirect()->route('category.index');
}
public function edit($id){
 $cat=Category::where('id',$id)->first();
   return view ('categories\edit',['category'=>$cat]);
}
public function create(){
return view('categories\create');
}
public function store(request $data){
  Category::create($data->except('_token'));
  return redirect()->route('category.index');
}



}
