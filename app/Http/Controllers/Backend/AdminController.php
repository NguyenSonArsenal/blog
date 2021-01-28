<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;
use App\Model\Entities\Admin;
use App\Repositories\AdminRepository;
use Illuminate\Support\Facades\Log;

class AdminController extends BackendController
{
    public function __construct(AdminRepository $adminRepository)
    {
        $this->setRepository($adminRepository);
    }

    public function index()
    {
        $this->_clearSessionForm();
        $entities = $this->getRepository()->getListForBackend();

        $viewData = [
            'entities' => $entities
        ];

        return viewBackend('admin.index', $viewData);
    }

    public function store()
    {
        try {
            $params = request()->all();

            /** @var \App\Validators\Backend\AdminValidator $validator */
            $validator = $this->getRepository()->getValidator();
            $isValid = $validator->validateStoreAdmin($params);

            if (!$isValid) {
                unset($params['avatar']);
                $this->setFormData($params);
                return $this->_inValid($validator->errors());
            }

            if (request()->hasFile('avatar')) {
                $fileName = time() . "_"  . request()->file('avatar')->getClientOriginalName();
                $uploadPath  = public_path('backend/uploads/') . date('Y-m-d'); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('avatar')->move($uploadPath, $fileName);
                $params['avatar'] = '/backend/uploads/' . date('Y-m-d') . '/' . $fileName;
            }

            $entity = new Admin();
            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess('admin.admin.list', transMessage('create_success'));
        } catch (\Exception $e) {
            // @todo log errors
            Log::error($e);
        }
        return backRouteError('admin.admin.list', transMessage('system_error'));
    }
}
