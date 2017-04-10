<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class BlogController extends Controller
{
    var $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return view('welcome', [
            'articles' => Post::orderBy('id')->get(),
        ]);
    }

    public function view($id)
    {
        $post = $this->postRepository->get($id);

        return view('view', compact('post'));
    }
}
