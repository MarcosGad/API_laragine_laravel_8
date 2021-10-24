<?php

namespace Core\Blog\Controllers\API\V1;

use Core\Blog\Requests\PostRequest as FormRequest;
use Core\Blog\Models\Post as Model;
use Core\Blog\Resources\PostResource as Resource;

class PostController extends \Core\Base\Controllers\API\Controller
{
    /**
     * Init.
     * @param FormRequest $request
     * @param Model $model
     * @param string $resource
     */
    public function __construct(FormRequest $request, Model $model, $resource = Resource::class)
    {
        parent::__construct($request, $model, $resource);
    }
}
