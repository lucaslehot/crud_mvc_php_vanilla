<?php
namespace App\Models;

class Post extends Model {
    public $id;
    public $title;
    public $body;
    public $user_id;

    public function __construct($id, $title, $body, $author, $comments, $created_at, $updated_at) {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->comments = $comments;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }

    public function create() {
      $query = "INSERT INTO posts (title, body, created_at, updated_at) VALUES (:title, :body, NOW(), NOW())";
      $query_params = array(
        ':title' => $this->title,
        ':body' => $this->body,
      );
      $this->db->query($query, $params);
    }

    public function read($id) {
      $query = "SELECT (title, body) FROM posts WHERE id = :id";
      $params = array(
        ':id' => $id,
      );
      return $this->db->query($query, $params);
    }

    public function update() {
      $query = "UPDATE posts SET title = :title, body = :body, updated_at = NOW() WHERE id = :id";
      $query_params = array(
        ':title' => $this->title,
        ':body' => $this->body,
        ':id' => $this->id,
      );
      return $this->db->query($query, $query_params);
    }

    public function delete() {
      $query = "DELETE FROM posts WHERE id = :id";
      $params = array(
        ':id' => $this->id,
      );
      return $this->db->query($query, $params);
    }

    public function readAll() {
      $query = "SELECT * FROM posts";
      return $this->db->query($query);
    }

    public function author() {
      $query = "SELECT * FROM users WHERE id = :user_id";
      $params = array(
        ':user_id' => $this->user_id,
      );
      return $this->db->query($query, $params);
    }

    public function comments() {
      $query = "SELECT * FROM comments WHERE post_id = :post_id";
      $params = array(
        ':post_id' => $this->id,
      );
      return $this->db->query($query, $params);
    }
}
?>