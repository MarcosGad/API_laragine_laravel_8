<?php

namespace Core\Blog\Resources;

use Illuminate\Http\Resources\Json\JsonResource as Resource;

class PostResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'   => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'thumbnail' => $this->thumbnail,
            $this->mergeWhen($request->route()->getName() == 'api.v1.posts.show', [

            ])
        ];
    }
}
