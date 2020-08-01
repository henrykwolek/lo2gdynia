<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all()->sortByDesc('id');

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('blog-post', ['post' => $post]);
    }

    public function create()
    {
        return view('admin/posts/create');
    }

    public function store(Request $request)
    {
        $inputs = request()->validate([
            'title'=> 'required|min:8|max:255',
            'post_image'=> 'file',
            'body'=> 'required'
        ]);
        if(request('post_image')){
            $inputs['post_image'] = request('post_image')->store('images');
        }
        auth()->user()->posts()->create($inputs);

        $request->session()->flash('utworzono', 'Post został dodany');

        return redirect()->route('post.index');
    }

    public function edit(Post $post, Request $request)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    public function destroy(Post $post, Request $request)
    {
        $post->delete();

        $request->session()->flash('message', 'Post został usunięty');

        return back();
    }

    public function update(Post $post, Request $request)
    {
        $inputs = request()->validate([
            'title'=> 'required|min:8|max:255',
            'post_image'=> 'file',
            'body'=> 'required'
        ]);


        if(request('post_image')){
            $inputs['post_image'] = request('post_image')->store('images');
            $post->post_image = $inputs['post_image'];
        }

        $post->title = $inputs['title'];
        $post->body = $inputs['body'];

        $post->save();

        session()->flash('post-updated-message', 'Post został zaktualizowany');

        return redirect()->route('post.index');
    }
}
