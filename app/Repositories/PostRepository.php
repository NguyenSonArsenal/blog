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

    public function getListForFrontend()
    {
        return $query->orderBy('id', 'desc')->paginate(getBackendPagination());
    }
}
