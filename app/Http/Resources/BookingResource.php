<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookingResource extends JsonResource
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
            'client_name ' => $this->client_name ,
            'client_phone_number' => $this->client_phone_number,
            'day ' => $this->day ,
            'start_time  ' => $this->start_time  ,
            'barber' => $this-> barberbooking,
        ];
    }
}
