<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class Person extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'cpf', 'date_of_birth', 'photo', 'identifier', 'gender'
    ];

    /**
     * 
     * @var \App\Models\Person $address
     */
    private $person;

    /**
     * Create a new model instance.
     *
     * @* @param Person $person
     * 
     * @return void
     */
    // public function __construct(Person $person) {
    //     $this->person = $person;
    // }

    /**
     *
     */
    public function teacher() {
        return $this->hasOne(Teacher::class);
    }

    /**
     *
     */
    public function student() {
        return $this->hasOne(Student::class);
    }

    /**
     *
     */
    public function address() {
        return $this->belongsTo(Address::class);
    }
}
