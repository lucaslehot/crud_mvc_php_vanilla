<?php
// $fmk->initIndexRoute("home", "", "crud_php/app/Http/controllers/home.php", "index");
//posts
$fmk->initRoute("posts", "posts.html", "crud_php/app/Http/controllers/PostController.php", "index");
$fmk->initRoute("post/create", "post/create.html", "crud_php/app/Http/controllers/PostController.php", "create");
$fmk->initRoute("post/edit/{id}", "post/edit.html", "crud_php/app/Http/controllers/PostController.php", "edit");
$fmk->initRoute("post/delete/{id}", "post/delete.html", "crud_php/app/Http/controllers/PostController.php", "delete");
$fmk->initRoute("post/{id}", "post.html", "crud_php/app/Http/controllers/PostController.php", "show");
//comments
$fmk->initRoute("post/{id}/comments", "post/comment.html", "crud_php/app/Http/controllers/PostController.php", "showComments");
$fmk->initRoute("post/{id}/comment/create", "post/comment/create.html", "crud_php/app/Http/controllers/CommentController.php", "create");
$fmk->initRoute("post/{id}/comment/{comment_id}/edit", "post/comment/edit.html", "crud_php/app/Http/controllers/CommentController.php", "edit");
$fmk->initRoute("post/{id}/comment/{comment_id}/delete", "post/comment/delete.html", "crud_php/app/Http/controllers/CommentController.php", "delete");
//users
$fmk->initRoute("user/create", "user/create.html", "crud_php/app/Http/controllers/UserController.php", "create");
$fmk->initRoute("user/edit/{id}", "user/edit.html", "crud_php/app/Http/controllers/UserController.php", "edit");
$fmk->initRoute("user/delete/{id}", "user/delete.html", "crud_php/app/Http/controllers/UserController.php", "delete");
$fmk->initRoute("user/{id}", "user.html", "crud_php/app/Http/controllers/UserController.php", "show");




