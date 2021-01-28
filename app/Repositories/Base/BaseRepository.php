<?php

namespace App\Repositories\Base;

use App\Http\Supports\Url;
use Illuminate\Container\Container as Application;
use Prettus\Repository\Eloquent\BaseRepository as BaseRepo;

abstract class BaseRepository extends BaseRepo
{
    protected $_repository;

    public function __construct(Application $app)
    {
        $this->setValidator(app($this->validator()));
        parent::__construct($app);
    }

    public function getValidator()
    {
        return $this->validator;
    }

    public function setValidator($validator)
    {
        return $this->validator = $validator;
    }

    public function getRepository()
    {
        return $this->_repository;
    }

    public function setRepository($repository)
    {
        return $this->_repository = $repository;
    }

    public function model()
    {
        return "";
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        return $this->model = $model;
    }

    public function getListForBackend()
    {
        $query = $this->delFlagOn();
        return $this->_buildSearchQuery($query)->orderBy('id', 'desc')->paginate(getBackendPagination());
    }

    public function getListForFrontend()
    {
        return $this->where('del_flag', delFlagOn())->orderBy('id', 'desc')->paginate(getFrontendPagination());
    }

    public function __call($method, $params)
    {
        return call_user_func_array([$this->getModel(), $method], $params);
    }

    public function findById($id)
    {
        return $this->where('id', $id)->where('del_flag', delFlagOn())->first();
    }

    // ========== PROTECTED AREA ==========

    /**
     * @param $query
     * @param array $queryString
     * @return mixed
     */
    protected function _buildSearchQuery($query, $queryString = [])
    {
        $queryString = empty($queryString) ? request()->all() : $queryString;
        $mainTable = $this->getModel()->getModel()->getTable();

        $mapOperator = [
            'eq' => '=',
            'contains' => 'like',
        ];

        foreach ($queryString as $key => $value) {
            if (is_null($value) || $key == Url::QUERY) {
                continue;
            }

            $field = $mainTable . '.' . arrayGet(explode('_', $key), 0);
            $operatorAlias = arrayGet(explode('_', $key), 1);

            if (is_null($operatorAlias)) {
                continue;
            }

            $operator = $mapOperator[$operatorAlias];

            switch ($operatorAlias) {
                case $operatorAlias == 'eq':
                    if (str_contains($field, 'status') && $value == -1) {
                        break;
                    }
                    $query->where($field, $operator, $value);
                    break;

                case $operatorAlias == 'contains':
                    $query->where($field, $operator, '%' . $value . '%');
                    break;
            }
        }

        return $query;
    }

    protected function _builder()
    {
        return $this->where('del_flag', delFlagOn())->where('status', statusOn());
    }
}
