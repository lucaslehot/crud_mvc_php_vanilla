<?php

namespace App\Http\Controllers;

class PostController extends Controller {
  public function __construct() {
    $this->postModel = $this->model('Post');
  }

  public function index() {
    $posts = $this->postModel->readAll();
    $data = [
      'posts' => $posts,
    ];

    return view('post.index', $data);
  }
}

?>  
