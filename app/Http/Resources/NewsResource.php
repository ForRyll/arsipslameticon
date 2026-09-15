<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'       => $this->id,
            'title'    => $this->title,
            'slug'     => $this->slug,
            'img_url'  => $this->img_url ? asset('storage/' . $this->img_url) : null,
            'content'  => $this->content,
            'author'   => [
                'id'   => $this->author?->id,
                'name' => $this->author?->name,
            ],
            'category' => [
                'id'   => $this->category?->id,
                'name' => $this->category?->name,
            ],
            'created_at' => $this->created_at?->toDateTimeString(),
            'updated_at' => $this->updated_at?->toDateTimeString(),
        ];
    }
}