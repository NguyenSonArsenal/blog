<?php

namespace App\Model\Entities;

use App\Model\Base\Auth\AuthTmp;

class Admin extends AuthTmp
{
    protected $table = "admins";

    use \App\Model\Presenters\Admin;

    protected $fillable = [
        'name', 'email', 'avatar', 'created_at', 'updated_at', 'del_flag'
    ];
}

