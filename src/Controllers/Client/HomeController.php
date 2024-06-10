<?php

namespace Pc\AssmPhp21\Controllers\Client;

use Pc\AssmPhp21\Commons\Controller;
use Pc\AssmPhp21\Models\Categories;
use Pc\AssmPhp21\Models\Post;
use Pc\AssmPhp21\Models\User;

class HomeController extends Controller
{
    private Post $post;

    public function __construct()
    {
        $this->post = new Post();
    }
    public function index()
    {
        $postHot = $this->post->getAHot();
        $postTop6 = $this->post->getTop6();
        $postTop6Chunk = array_chunk($postTop6,3);
        return $this->renderViewClient(
            'home',
            [
                'postHot' => $postHot,
                'postTop6' => $postTop6,
                'postTop6Chunk' => $postTop6Chunk
            ]
        );
    }
}
