<?php

namespace App\Model\Scopes;

trait Scope
{
    public function scopeStatusOn($query)
    {
        return $query->where('status', statusOn());
    }

    public function scopeDelFlagOn($query)
    {
        return $query->where('del_flag', delFlagOn());
    }
}
