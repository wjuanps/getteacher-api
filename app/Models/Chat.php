<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class Chat extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sender', 'recipient', 'message', 'read'
    ];

    /**
     * 
     * @var \App\Models\Chat $Chat
     */
    private $Chat;

    /**
     * Create a new model instance.
     *
     * @* @param Chat $Chat
     * 
     * @return void
     */
    public function __construct(Chat $Chat) {
        $this->Chat = $Chat;
    }
}
