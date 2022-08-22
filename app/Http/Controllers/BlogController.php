<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller{
    public function index(){
        $Articles = Blog::latest()->get();
        return view('index' , compact('Articles'));
    }
    public function getSingle($id){
        $Article = Blog::find($id);
        return view('single' , compact('Article'));
    }
    public function getNew(){
        return view('new');
    }
    public function postNew(Request $r){
        $NewArticle = new Blog;
        $NewArticle->title = $r->title;
        $NewArticle->description = $r->description;
        $NewArticle->save();
        return back();
    }
}
