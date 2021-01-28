<?php

namespace App\Model\Base;

use App\Model\Presenters\Base\BasePresenter;
use App\Model\Scopes\Scope;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use BasePresenter;
    use Scope;

    public $timestamps = true;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function tryGet($relation)
    {
        if (empty($this->{$relation})) {
            $instance = $this->$relation()->getRelated();
            $data = array_combine(
                $instance->getFillable(),
                array_fill(0, count($instance->getFillable()), null)
            );
            return $instance->fill($data);
        }
        return $this->{$relation};
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    /**
     * @return bool
     * Model soft delete
     */
    public function modelSoftDelete()
    {
        // @todo
        // return $this->update([getConfig('del_flag_column.field') => getConfig('del_flag_column.deleted')]);
    }
}
