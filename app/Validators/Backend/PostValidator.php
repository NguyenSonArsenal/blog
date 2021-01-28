<?php

namespace App\Validators\Backend;

use App\Validators\Base\BaseValidator;

class PostValidator extends BaseValidator
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

    public function validateStorePost($params = [])
    {
        $rules = [
            'title' => 'bail|required|max:255',
            'content' => 'bail|required',
            'short_description' => 'bail|max:255',
            'featured_image' => 'bail|nullable|mimes:jpeg,jpg,png,gif|max:1024', // 100KB, 1024kb = 1 MB,
            'status' => 'bail|nullable|in:0,1'
        ];

        return $this->validate($rules, $params);
    }

    protected function _setCustomAttributes()
    {
        return [
            'title' => 'Tiêu đề',
            'featured_image' => 'Ảnh đại diện',
            'content' => 'Nội dung bài viết',
            'short_description' => 'Mô tả ngắn',
            'status' => 'Trạng thái',
        ];
    }
}
