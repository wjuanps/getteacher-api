<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class Category extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'field_id', 'category', 'slug'
    ];

    /**
     * 
     * @var \App\Models\Category $category
     */
    private $category;

    /**
     * Create a new model instance.
     *
     * @* @param Category $category
     * 
     * @return void
     */
    // public function __construct(Category $category) {
    //     $this->category = $category;
    // }
    
    public function field() {
        return $this->belongsTo(Field::class);
    }
}
