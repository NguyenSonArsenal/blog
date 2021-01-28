<?php

namespace App\Repositories;

use App\Model\Entities\Admin;
use App\Repositories\Base\BaseRepository;
use App\Validators\Backend\AdminValidator;

class AdminRepository extends BaseRepository
{
    public function model()
    {
        return Admin::class;
    }

    public function validator()
    {
         return AdminValidator::class;
    }

    public function getList()
    {
        return $this->where('del_flag', delFlagOn())->orderBy('id', 'desc')->paginate(getBackendPagination());
    }
}
