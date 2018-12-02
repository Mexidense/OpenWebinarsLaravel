<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {

    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('blog.singlepost')->with([
            'post' => $post,
        ]);
    }

    /**
     * Function for create post on DB
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        if($validator->fails()){
            return redirect('post/create')
                ->withErrors($validator)
                ->withInput();

        }
        //store post
        $post = Post::create($request->except('csrf'));
        return redirect('/');

    }

    /**
     * Function for view all posts
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $posts = Post::all();
//        var_dump($post);
//        die();
        return view('blog.index')->with([
            'posts' => $posts,
        ]);
    }

    /**
     * Function for delete one post by ID
     * @param $id
     * @return string
     */
    public function destroy($id){
        return Post::destroy($id) > 0 ? 'Post deleted' : 'Post didnt delete';
    }

    /**
     * Function for go to form create view
     */
    public function create(){
        return view('dashboard.post.create');
    }
}