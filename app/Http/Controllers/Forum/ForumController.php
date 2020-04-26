<?php

namespace App\Http\Controllers\Forum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Forum;

/**
 * 
 * @author Juan Soares
 */
class ForumController extends Controller {
        
    /**
     * 
     * @var \App\Models\Forum $forum
     */
    private $forum;

    /**
     * Create a new controller instance.
     *
     * @* @param Forum $forum
     * 
     * @return void
     */
    public function __construct(Forum $forum) {
        $this->forum = $forum;
    }

    public function index() {
        $asks = Forum::paginate(10);
        return view('site.forum', compact('asks'));
    }

}
