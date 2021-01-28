<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Supports\RepositoryUtil;

class Controller extends BaseController
{
    protected $_repository;
    protected $_formData;

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, RepositoryUtil;

    public function getRepository()
    {
        return $this->_repository;
    }

    public function setRepository($repository)
    {
        return $this->_repository = $repository;
    }

    public function setFormData($data = [])
    {
        $this->_formData = $data;
    }

    public function getFormData()
    {
        return $this->_formData;
    }
}
