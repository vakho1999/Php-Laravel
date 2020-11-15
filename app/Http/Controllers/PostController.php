<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view('posts')->with('posts', $posts);
    }

    public function create(){
        return view('create');
    }

    public function save(Request $request){
        request()->validate([
            'title'=> 'required',
            'post_text'=> 'required',

        ]);

        $post = new Post($request->all());
        $post->save();
        return redirect()->back();
    }

    public function edit($id){
        $post = Post::findOrfail($id);
        return view('edit')->with('post',$post);
    }

    public function show(Post $post){
        return view('post')->with('post', $post);
    }

    public function update(Request $request, $id){

        $post = Post::findOrfail($id);

        $post->update($request->all());

        return redirect()->route('posts.show', $post->id);
    }

    public function delete(Post $post){
        $post->delete();
        return redirect()->back();
    }
}
