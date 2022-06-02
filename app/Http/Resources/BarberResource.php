<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BarberResource extends JsonResource
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
            'id' => $this->id,
            'barber_name' => $this->barber_name,
            'barber_phone_number' => $this->barber_phone_number,
            'barber_home_adress' => $this->barber_home_adress,
            'start_time' => $this-> start_time,
            'barber_photo' => $this-> barber_photo,
            'end_time' => $this-> end_time,
        ];
    }
}
