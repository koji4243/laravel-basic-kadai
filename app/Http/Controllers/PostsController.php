<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function index(){
        $posts = DB::table('posts')->get();
        return view('get', compact('posts'));
    }
    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
                // バリデーションを設定する
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200'
        ]);
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index');
    }
}
