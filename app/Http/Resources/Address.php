<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Address extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "district" => $this->neighborhood,
      "zipcode" => $this->zipcode,
      "city" => $this->city,
      "state" => $this->state,
      "street" => $this->street,
      "complement" => $this->complement,
    );
  }
}
