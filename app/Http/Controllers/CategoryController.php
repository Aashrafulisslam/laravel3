<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class CategoryController extends Controller
{
    private $category;
    public function index(){
        return view('admin.category.category',[
            'categories' => Category::all(),
        ]);
    }
    public function addCategory(Request $request){
        $category = new Category();
        $category->ctg_name = $request->ctg_name;
        $category->save();
        return back();
    }
    public function edit($id){
        return view('admin.category.edit',[
            'category' => Category::find($id),
        ]);
    }
    public function updateCategory(Request $request){
        $this->category = Category::find($request->ctg_id);
        $this->category->ctg_name = $request->ctg_name;
        $this->category->save();
        return redirect('category');
    }
    public function delete(Request $request){
        $this->category = Category::find($request->ctg_id);
        $this->category->delete();
        return back();
    }
    public function status($id){
        $blog = Category::find($id);
        if ($blog->status == 1){
            $blog->status = 0;
        }else{
            $blog->status = 1;
        }
         $blog->save();
        return back();
     }
}
