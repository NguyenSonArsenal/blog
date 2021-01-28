<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\AuthTmp;
use App\Model\Presenters\PostPresenter;

class Post extends AuthTmp
{
    use PostPresenter;

    protected $table = 'posts';

    protected $fillable = [
        'title', 'featured_image', 'content', 'short_description', 'status',
        'created_at', 'updated_at', 'del_flag'
    ];
}
