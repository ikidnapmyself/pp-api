<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'type'       => 'user',
            'id'         => (string) $this->id,
            'attributes' => [
                'name'          => $this->name,
                'provider_id'   => $this->provider_id,
                'provider_name' => $this->provider_name,
                'profile'       => $this->profile,
                'created_at'    => $this->created_at,
                'updated_at'    => $this->updated_at,
            ]
        ];
    }
}
