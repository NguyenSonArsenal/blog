<?php

namespace App\Model\Presenters;

trait User
{
    // @todo

    public function isGirl()
    {
        return $this->gender == getConfig('gender_column.girl');
    }

    public function isBoy()
    {
        return $this->gender == getConfig('gender_column.boy');
    }

    public function showUserGender()
    {
        switch (true) {
            case $this->isGirl():
                return '<small class="label label-primary"> Boy </small>';
            case $this->isBoy():
                return '<small class="label label-danger"> Girl </small>';
        }
    }
}
