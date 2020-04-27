<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Address as AddressResource;
use App\Http\Resources\Phone as PhoneResource;

class Person extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "date_of_birth" => $this->date_of_birth,
      "photo" => $this->photo,
      "gender" => $this->gender,
      "address" => new AddressResource($this->address),
      "phones" => PhoneResource::collection($this->phone)
    );
  }
}
