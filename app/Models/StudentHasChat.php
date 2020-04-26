<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class StudentHasChat extends Model {
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chat_id', 'student_id'
    ];

    /**
     * 
     * @var \App\Models\StudentHasChat $studentHasChat
     */
    private $studentHasChat;

    /**
     * Create a new model instance.
     *
     * @* @param StudentHasChat $studentHasChat
     * 
     * @return void
     */
    public function __construct(StudentHasChat $studentHasChat) {
        $this->studentHasChat = $studentHasChat;
    }
}
