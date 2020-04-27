<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeacherDegree extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "degree" => $this->degree,
      "intitution" => $this->intitution,
      "course" => $this->course,
      "diploma" => $this->diploma,
      "year_of_start" => $this->year_of_start,
      "year_of_end" => $this->year_of_end
    );
  }
}
