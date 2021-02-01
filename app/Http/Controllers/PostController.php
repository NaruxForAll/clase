<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\view;

class PostController extends Controller
{
    protected $post;

    function __construct (post $post)
    {
        $this->post = $post;

    }

    public function index() {
        return view('home');
    }

    public function store(Request $request)
    {
        $post = $this->post->updateOrCreate([
            'id' => request ('id')], [
            'title' => request ('title'),
            'content' => request('content') 
        ]);

        $view = View::make('posts')
        ->with('post' , $post)
        ->with('posts' , $this->post->get())
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'], 
        ]);

    }
}