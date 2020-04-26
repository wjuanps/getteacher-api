<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class PostDeslike extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'person_id'
    ];

    /**
     * 
     * @var \App\Models\PostDeslike $postDeslike
     */
    private $postDeslike;

    /**
     * Create a new model instance.
     *
     * @* @param PostDeslike $postDeslike
     * 
     * @return void
     */
    // public function __construct(PostDeslike $postDeslike) {
    //     $this->postDeslike = $postDeslike;
    // }
}
