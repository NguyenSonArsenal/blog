<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;
use App\Model\Entities\Post;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Log;

class PostController extends BackendController
{
    public function __construct(PostRepository $postRepository)
    {
        $this->setRepository($postRepository);
    }

    public function index()
    {
        $this->_clearSessionForm();
        $entities = $this->getRepository()->getListForBackend();

        $viewData = [
            'entities' => $entities
        ];

        return view('backend.post.index', $viewData);
    }

    public function create()
    {
        $entity = $this->findOrNewEntityForCreate();
        $viewData = [
            'entity' => $entity
        ];

        return view('backend.post.create', $viewData);
    }

    public function store()
    {
        try {
            $params = request()->all();

            /** @var \App\Validators\Backend\PostValidator $validator */
            $validator = $this->getRepository()->getValidator();
            $isValid = $validator->validateStorePost($params);

            if (!$isValid) {
                unset($params['featured_image']);
                $this->setFormData($params);
                return $this->_inValid($validator->errors());
            }

            if (request()->hasFile('featured_image')) {
                $fileName = time() . "_"  . request()->file('featured_image')->getClientOriginalName();
                $uploadPath  = public_path('admin-assets/uploads/') . date('Y-m-d'); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('featured_image')->move($uploadPath, $fileName);
                $params['featured_image'] = '/admin-assets/uploads/' . date('Y-m-d') . '/' . $fileName;
            }

            $entity = new Post();

            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess('admin.post.list', transMessage('create_success'));
        } catch (\Exception $e) {
            // @todo log errors
            Log::error($e);
        }
        return backRouteError('admin.post.list', transMessage('system_error'));
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
            return view('backend.post.edit', $viewData);
        } catch (\Exception $e) {
            // @todo log error
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

            /** @var \App\Validators\Backend\PostValidator $validator */
            $validator = $this->getRepository()->getValidator();
            $isValid = $validator->validateStorePost($params);

            if (!$isValid) {
                unset($params['featured_image']);
                $this->setFormData($params);
                return $this->_inValid($validator->errors());
            }

            if (request()->hasFile('featured_image')) {
                $fileName = time() . "_"  . request()->file('featured_image')->getClientOriginalName();
                $uploadPath  = public_path('admin-assets/uploads/') . date('Y-m-d'); // Folder upload path

                if (!file_exists($uploadPath)) {
                    mkdir($uploadPath, 0777, true);
                }

                request()->file('featured_image')->move($uploadPath, $fileName);
                $params['featured_image'] = '/admin-assets/uploads/' . date('Y-m-d') . '/' . $fileName;
                // @todo delete old file
            }


            $entity->fill($params);
            $entity->save();
            $this->afterStoreUpdateCommit();
            return backRouteSuccess('admin.post.list', transMessage('update_success'));
        } catch (\Exception $e) {
            // @todo log error
            // dd($e);
        }
        return backSystemError();
    }
}
