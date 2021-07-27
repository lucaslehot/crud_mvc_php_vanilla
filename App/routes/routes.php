<?php
// $fmk->initIndexRoute("home", "", "crud_php/app/Http/controllers/home.php", "index");
//posts
$fmk->initRoute("posts", "posts.html", "crud_php/app/Http/controllers/PostController.php", "index");
$fmk->initRoute("post/create", "post/create.html", "crud_php/app/Http/controllers/PostController.php", "create");
$fmk->initRoute("post/update/{id}", "post/update.html", "crud_php/app/Http/controllers/PostController.php", "update");
$fmk->initRoute("post/delete/{id}", "post/delete.html", "crud_php/app/Http/controllers/PostController.php", "delete");
$fmk->initRoute("post/{id}", "post.html", "crud_php/app/Http/controllers/PostController.php", "read");
//comments
$fmk->initRoute("post/{id}/comments", "post/comment.html", "crud_php/app/Http/controllers/PostController.php", "readComments");
$fmk->initRoute("post/{id}/comment/create", "post/comment/create.html", "crud_php/app/Http/controllers/CommentController.php", "create");
$fmk->initRoute("post/{id}/comment/{comment_id}/update", "post/comment/update.html", "crud_php/app/Http/controllers/CommentController.php", "update");
$fmk->initRoute("post/{id}/comment/{comment_id}/delete", "post/comment/delete.html", "crud_php/app/Http/controllers/CommentController.php", "delete");
//users
$fmk->initRoute("user/register", "user/register.html", "crud_php/app/Http/controllers/UserController.php", "register");
$fmk->initRoute("user/login", "user/login.html", "crud_php/app/Http/controllers/UserController.php", "login");




