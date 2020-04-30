<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Student as StudentResource;
use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\ForumAnswer as ForumAnswerResource;

class Forum extends JsonResource {
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request) {
    return array(
      "id" => $this->getUuid(),
      "subject" => $this->subject,
      "question" => $this->question,
      "complement" => $this->complement,
      "status" => $this->status,
      "image" => $this->image,
      "category" => new CategoryResource($this->category),
      "answers" => ForumAnswerResource::collection($this->answers),
      "student" => new StudentResource($this->student)
    );
  }
}
