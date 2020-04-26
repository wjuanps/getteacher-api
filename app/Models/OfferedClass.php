<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

/**
 *
 * @author Juan Soares
 */
class OfferedClass extends Model {

  use HasUuid;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'teacher_id', 'specialty'
  ];

  /**
   *
   * @var \App\Models\OfferedClass $offeredClasse
   */
  private $offeredClasse;

  /**
   *
   */
  public function category() {
    return $this->belongsTo(Category::class);
  }

  /**
   * Create a new model instance.
   *
   * @* @param OfferedClass $offeredClasse
   *
   * @return void
   */
  // public function __construct(OfferedClass $offeredClasse) {
  //     $this->offeredClasse = $offeredClasse;
  // }
}
