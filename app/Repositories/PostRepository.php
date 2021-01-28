<?php

namespace App\Repositories;

use App\Model\Entities\Post;
use App\Repositories\Base\BaseRepository;
use App\Validators\Backend\PostValidator;

class PostRepository extends BaseRepository
{
    public function model()
    {
        return Post::class;
    }

    public function validator()
    {
        return PostValidator::class;
    }

    // ========== FRONTEND ==========

    /**
     * @return mixed
     */
    public function frontendGetList()
    {
        return $this->_builder()->orderBy('id', 'desc')->paginate(getFrontendPagination());
    }

    /**
     * get list 5 last post for home page
     */
    public function frontendGetLastPosts()
    {
        return $this->_builder()->orderBy('id', 'desc')->take(5)->get();
    }

    public function frontendGetNextEntity($id)
    {
        return $this->_builder()->where('id', '>', $id)->orderBy('id')->first();
    }

    public function frontendGetPreviousEntity($id)
    {
        return $this->_builder()->where('id', '<', $id)->orderBy('id','desc')->first();
    }
    // ========== END FRONTEND ==========
}
