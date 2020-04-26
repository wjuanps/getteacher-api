<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class Forum extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_id', 'subject', 'question', 'complement', 'image', 'status'
    ];

    /**
     * 
     * @var \App\Models\Forum $forum
     */
    private $forum;

    /**
     * Create a new model instance.
     *
     * @* @param Forum $forum
     * 
     * @return void
     */
    // public function __construct(Forum $forum) {
    //     $this->forum = $forum;
    // }
    
    /**
     *
     */
    public function student() {
        return $this->belongsTo(Student::class);
    }
    
    /**
     *
     */
    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    /**
     *
     */
    public function answers() {
        return $this->hasMany(ForumAnswer::class);
    }
}
