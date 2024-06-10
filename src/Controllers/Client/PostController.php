<?php

namespace Pc\AssmPhp21\Controllers\Client;

use Pc\AssmPhp21\Commons\Controller;
use Pc\AssmPhp21\Models\Categories;
use Pc\AssmPhp21\Models\Post;
use Pc\AssmPhp21\Models\User;

class PostController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post();
    }
    public function show($id)
    {
        $postShow = $this->post->getByIDPost($id);
// debug($postShow);
        return $this->renderViewClient(
            'post-show',
            [
                'postShow' => $postShow,
            ]
        );
    }
}
