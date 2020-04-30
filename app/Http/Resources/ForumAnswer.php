<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Teacher as TeacherResource;

class ForumAnswer extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "answer" => $this->answer,
      "teacher" => new TeacherResource($this->teacher)
    );
  }
}
