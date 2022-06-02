<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        $d = "http://barber.amusoft.uz/photo/".(string)$this->url;
        return [
            'id' => $this->id,
            'name'=>$this->name,
            'url'=>$this->url,
        ];
    }
}
