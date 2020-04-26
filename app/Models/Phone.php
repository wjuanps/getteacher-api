<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class Phone extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'person_id', 'number'
    ];

    /**
     * 
     * @var \App\Models\Phone $phone
     */
    private $phone;

    /**
     * Create a new model instance.
     *
     * @* @param Phone $phone
     * 
     * @return void
     */
    public function __construct(Phone $phone) {
        $this->phone = $phone;
    }
}
