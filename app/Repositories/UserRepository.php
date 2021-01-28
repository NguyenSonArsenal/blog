<?php

namespace App\Repositories;

use App\Model\Entities\News;
use App\Model\Entities\User;
use App\Repositories\Base\BaseRepository;
use App\Validators\Backend\NewValidator;
use App\Validators\Backend\UserValidator;

class UserRepository extends BaseRepository
{
    public function model()
    {
        return User::class;
    }

    public function validator()
    {
         return UserValidator::class;
    }
}
