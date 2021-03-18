<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;

class PostController extends Controller
{
    public function index() 
    {

        $posts = Post::get();

        return view('admin.posts.index', compact('posts'));

    }

    public function create()
    {

        return view('admin.posts.create');

    }

    public function store(StoreUpdatePost $request)
    {

        Post::create($request->all());

        return redirect()
        ->route('posts.index')
        ->with('msg', 'Post criado com sucesso!!!');

    }

    public function show($id)
    {

        $post = Post::find($id);

        if(!$post){

            return redirect()->route('posts.index');
        }

        return view('admin.posts.show', compact('post'));

    }

    public function edit($id)
    {

        if(!$post = Post::find($id)){

            return redirect()->route('posts.index');
        }
        
        return view('admin.posts.edit', compact('post'));
       
    }

    public function update(StoreUpdatePost $request, $id)
    {

        if(!$post = Post::find($id)){

            return redirect()->route('posts.index');
        }
        
        $post->update($request->all());

        return redirect()
        ->route('posts.index')
        ->with('msg', 'Post editado com sucesso!!!');
       
    }

    public function destroy($id)
    {

        if(!$post = Post::find($id))

        return redirect()->route('posts.index');

        $post->delete();
        
        return redirect()
        ->route('posts.index')
        ->with('msg', 'Post deletado com sucesso!!!');
       
    }
}
