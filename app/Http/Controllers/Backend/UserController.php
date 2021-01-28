<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;
use App\Model\Entities\User;
use App\Repositories\AdminRepository;
use App\Repositories\UserRepository;

class UserController extends BackendController
{
    public function __construct(UserRepository $userRepository)
    {
        $this->setRepository($userRepository);
    }

    public function index()
    {
        $this->_clearSessionForm();
        $entities = $this->getRepository()->getListForBackend();

        $viewData = [
            'entities' => $entities
        ];

        return view('backend.user.index', $viewData);
    }

    public function create()
    {
        $entity = $this->findOrNewEntityForCreate();
        $viewData = [
            'entity' => $entity
        ];

        return view('backend.user.create', $viewData);
    }

    public function store()
    {
        try {
            $params = request()->all();

            /** @var \App\Validators\Backend\UserValidator $validator */
            $validator = $this->getRepository()->getValidator();
            $isValid = $validator->validateStoreUser($params);

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

            $entity = new User();
            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess(getConstant('BACKEND_ROUTE_NAME_PREFIX') . '.user.list', transMessage('create_success'));
        } catch (\Exception $e) {
            // @todo log errors
            dd($e);
        }
        return backRouteError(getConstant('BACKEND_ROUTE_NAME_PREFIX') . '.user.list', transMessage('system_error'));
    }

    public function edit($id)
    {
        try {
            $entity = $this->findEntityForUpdate($id);

            if (empty($entity)) {
                return backSystemError();
            }
            $viewData = [
                'entity' => $entity
            ];
            return view('backend.user.edit', $viewData);
        } catch (\Exception $e) {
            // @todo log error
            dd($e);
        }
        return backSystemError();
    }

    public function update($id)
    {
        try {
            $entity = $this->getRepository()->findById($id);
            if (empty($entity)) {
                return backSystemError();
            }

            $params = request()->all();

            /** @var \App\Validators\Backend\UserValidator $validator */
            $validator = $this->getRepository()->getValidator();
            $isValid = $validator->validateStoreUser($params, $entity->getKey());

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
                // @todo delete old file
            }


            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess(getConstant('BACKEND_ROUTE_NAME_PREFIX') . '.user.list', transMessage('update_success'));
        } catch (\Exception $e) {
            // @todo log error
        }
        return backSystemError();
    }
}
