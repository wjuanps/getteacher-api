<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Teacher extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "uuid" => $this->getUuid(),
      "about" => $this->about,
      "hour_of_class" => $this->hour_of_class,
      "kind_of_class" => $this->kind_of_class,
      "person" => [
        "uuid" => $this->person->getUuid(),
        "name" => $this->person->name
      ]
    );
  }
}
