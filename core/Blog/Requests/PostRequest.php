<?php

namespace Core\Blog\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'title' => 'string|required',
                    'body' => 'required',
                    'thumbnail' => 'string|nullable',
                ];
            }
            case 'PUT': {
                return [
                    'title' => 'string|required',
                    'body' => 'required',
                    'thumbnail' => 'string|nullable',
                ];
            }
        }
    }
}
