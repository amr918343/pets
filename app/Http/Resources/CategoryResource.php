<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'identity' => $this->id,
            'name' => $this->name,
            'details' => $this->description,
            'publish_date' => $this->created_at,
            'change_date' => $this->when(isset($this->updated_at), $this->updated_at),
            'delete_date' => $this->when(isset($this->deleted_at), $this->deleted_at),
        ];
    }
}
