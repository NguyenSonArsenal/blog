<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\AuthTmp;
use \App\Model\Presenters\User as UserPresenter;

class User extends AuthTmp
{
    use UserPresenter;

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'phone_number', 'avatar', 'date_of_birth', 'address', 'gender', 'created_at', 'updated_at', 'del_flag'
    ];
}
