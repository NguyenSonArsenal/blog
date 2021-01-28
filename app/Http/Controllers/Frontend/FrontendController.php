<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;

class FrontendController extends Controller
{
    public function __construct(PostRepository $postRepository)
    {
        $this->setRepository($postRepository);
    }

    public function getHome()
    {
        $lastPosts = $this->getRepository()->frontendGetLastPosts();

        $viewData = [
            'lastPosts' => $lastPosts
        ];

        return view('frontend.home', $viewData);
    }

    public function getPage404()
    {
        return view('frontend.404');
    }

    public function getListPost()
    {
        $posts = $this->getRepository()->frontendGetList();

        $viewData = [
            'posts' => $posts
        ];

        return view('frontend.list-post', $viewData);
    }

    public function showPost($id)
    {
        $post = $this->getRepository()->findById($id);

        if (empty($post)) {
            return abort(404);
        }

        $nextPost = $this->getRepository()->frontendGetNextEntity($post->getKey());
        $previousPost = $this->getRepository()->frontendGetPreviousEntity($post->getKey());

        $viewData = [
            'post' => $post,
            'nextPost' => $nextPost,
            'previousPost' => $previousPost,
        ];

        return view('frontend.detail-post', $viewData);
    }

    public function getContact()
    {
        return view('frontend.contact');
    }

    public function getProfile()
    {
        return view('frontend.profile');
    }
}
