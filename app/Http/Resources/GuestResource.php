<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GuestResource extends JsonResource
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
            'origin' => $this->origin,
            'rating' => $this->rating,
            'treatment' => $this->treatment,
            'name' => $this->name,
            'escorts' => $this->escorts,
            'total' => $this->total,
            'men' => $this->men,
            'women' => $this->women,
            'children' => $this->children,
            'save_the_date' => $this->save_the_date,
            'confirmation' => $this->confirmation,
            'invite' => $this->invite,
            'gift' => $this->gift,
            'created_at' => $this->created_at->format('d/m/Y'),
        ];
    }
}
