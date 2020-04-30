<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Category as CategoryResource;

class OfferedClass extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "specialty" => $this->specialty,
      "category" => new CategoryResource($this->category)
    );
  }
}
