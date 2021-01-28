<?php

namespace App\Validators\Backend;

use App\Validators\Base\BaseValidator;

class UserValidator extends BaseValidator
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function validateStoreUser($params = [], $id = '')
    {
        $rules = [
            'name' => 'bail|required|max:64',
            'email' => 'bail|required|max:64|unique:users,email,' . $id,
            'phone_number' => 'bail|required|max:15|unique:users,phone_number,' . $id,
            'avatar' => 'bail|nullable|mimes:jpeg,jpg,png,gif|max:1024', // 100KB, 1024kb = 1 MB,
        ];

        return $this->validate($rules, $params);
    }

    protected function _setCustomAttributes()
    {
        return [
            'name' => 'Tên',
            'email' => 'Email',
            'phone_number' => 'Số điện thoại',
            'avatar' => 'Ảnh đại diện',
        ];
    }
}
