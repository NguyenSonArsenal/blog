<?php

namespace App\Model\Presenters\Base;

use Carbon\Carbon;

/**
 * Trait BasePresenter
 * @package App\Model\Presenters\Base
 */
trait BasePresenter
{
    // @todo

    public function getCreatedAt()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y H:i');
    }

    public function isStatusOn()
    {
        return $this->status == statusOn();
    }

    public function isDelFlagOn()
    {
        return $this->del_flag == delFlagOn();
    }

    public function isUserBoy()
    {
        return $this->gender == genderBoy();
    }

    public function isUserGirl()
    {
        return $this->gender == genderGirl();
    }
}
