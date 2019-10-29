<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'amount' => $this->status,
            'buyer' => $this->buyer_id,
            'pet' => $this->pet_id,
            'publish_date' => $this->created_at,
            'change_date' => $this->when(isset($this->updated_at), $this->updated_at),
            'delete_date' => $this->when(isset($this->deleted_at), $this->deleted_at),
        ];
    }
}
