<?php

namespace App\Http\Resources;

use App\Http\Resources\FieldResource;
use Illuminate\Http\Resources\Json\JsonResource;

class FormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'uuid' => $this->uuid,
            'form_name' => $this->form_name,
            'fields' => FieldResource::collection($this->fields),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
