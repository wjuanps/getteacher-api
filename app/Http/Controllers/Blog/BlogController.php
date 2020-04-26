<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;

use App\Models\Post;
use App\Models\Teacher;
use App\Models\PostTag;

/**
 * 
 * @author Juan Soares
 */
class BlogController extends Controller {
    
    /**
     * 
     * @var \App\Models\Post $post
     */
    private $post;

    /**
     * Create a new controller instance.
     *
     * @* @param Post $post
     * 
     * @return void
     */
    public function __construct(Post $post) {
        $this->post = $post;
    }

    public function index() {
        $posts = $this->post->paginate(6);
        $tags = $this->post->getCountTags();

        $recentPosts = $this->post->orderBy('created_at', 'DESC')->limit(3)->get();
        $categories = $this->post->getCountCategories();

        return view('site.blog.blog-dos-professores', compact('posts', 'categories', 'recentPosts', 'tags'));
    }

    public function artigoDoProfessor(Post $post) {
        $tags = $this->post->getCountTags();

        $recentPosts = $this->post->orderBy('created_at', 'DESC')->limit(3)->get();
        $categories = $this->post->getCountCategories();

        return view('site.blog.artigo-do-professor', compact('post', 'categories', 'recentPosts', 'tags'));
    }

    public function blogDoProfessor(Teacher $teacher) {
        $teacherPosts = $teacher->posts()->paginate(6);
        $tags = $this->post->getCountTags();

        $recentPosts = $this->post->orderBy('created_at', 'DESC')->limit(3)->get();
        $categories = $this->post->getCountCategories();

        return view('site.blog.blog-do-professor', compact('teacher', 'teacherPosts', 'categories', 'recentPosts', 'tags'));
    }

}
