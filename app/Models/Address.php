<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class Address extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'neighborhood', 'zipcode', 'city', 'state', 'street', 'complement'
    ];

    /**
     * 
     * @var \App\Models\Address $address
     */
    private $address;

    /**
     * Create a new model instance.
     *
     * @return void
     */
    // public function __construct(Address $address) {
    //     $this->address = $address;
    // }

    /**
     *
     */
    public function person() {
        return $this->hasOne(Person::class);
    }

}
