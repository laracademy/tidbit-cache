<?php

namespace App\Repositories;

use App\Post;

class PostRepository
{

    var $cacheId;

    public function __construct()
    {
        $this->cacheId = 'post.';
    }

    public function get($id)
    {
        $this->cacheId .= $id;

        $post = cache()->get($this->cacheId, null);

        if(! $post) {
            $post = Post::where('id', $id)->with(['comments', 'comments.user'])->first();
            cache()->put($this->cacheId, $post, 1);
        }

        return $post;
    }

    public function forgetCache($id)
    {
        cache()->forget($this->cacheId . $id);
    }

}