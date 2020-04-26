<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class Field extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'field', 'slug'
    ];

    /**
     * 
     * @var \App\Models\Field $field
     */
    private $field;

    /**
     * Create a new model instance.
     *
     * @* @param Field $field
     * 
     * @return void
     */
    // public function __construct(Field $field) {
    //     $this->field = $field;
    // }
    
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName() {
        return 'slug';
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }
 
}
