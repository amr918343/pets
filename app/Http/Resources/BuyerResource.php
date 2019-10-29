<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BuyerResource extends JsonResource
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
            'username' => $this->username,
            'fname' => $this->first_name,
            'lname' => $this->last_name,
            'email' => $this->email,
            'phone' => $this->pone,
            'isVerified' => $this->verified,
            'isAdmin' => $this->admin,
            'publish_date' => $this->created_at,
            'change_date' => $this->when(isset($this->updated_at), $this->updated_at),
            'delete_date' => $this->when(isset($this->deleted_at), $this->deleted_at),
        ];
    }
}
