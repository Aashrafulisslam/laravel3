<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class AuthorController extends Controller
{
    private $author;
    public function index(){
        return view('admin.author.author',[
            'authors' => Author::all()
        ]);
    }
    public function addAuthor(Request $request){
        Author::saveAuthor($request);
        return back();
    }
    public function delete(Request $request){
        $this->author = Author::find($request->author_id);
        $this->author->delete();
        return back();
    }
    public function editAuth($id){
        // dd($id);
        return view('admin.author.editAuthor',[
            $this->author = Author::find($id),
        ]); 
    }
    public function updateAuthor(Request $request){        
        $this->author = Author::find($request->author_id);
        $this->author->author_name = $request->author_name;
        $this->author->save();
        return back();
    }
}
