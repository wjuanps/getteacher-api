<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 * @author Juan Soares
 */
class ForumTag extends Model {
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'forum_id', 'tag'
    ];

    /**
     * 
     * @var \App\Models\ForumTag $forumTag
     */
    private $forumTag;

    /**
     * Create a new model instance.
     *
     * @* @param ForumTag $forumTag
     * 
     * @return void
     */
    public function __construct(ForumTag $forumTag) {
        $this->forumTag = $forumTag;
    }
}
