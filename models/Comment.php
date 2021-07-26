<?php
class Post extends Model {
    public $id;
    public $content;
    public $user_id;
    public $post_id;

    public function __construct($id, $content) {
        $this->id = $id;
        $this->content = $content;
    }

    public function create() {
      $query = "INSERT INTO comments (content, created_at, updated_at) VALUES (:content, NOW(), NOW())";
      $query_params = array(
        ':content' => $this->content,
      );
      return $this->db->query($query, $params);
    }

    public function read($id) {
      $query = "SELECT (content) FROM comments WHERE id = :id";
      $params = array(
        ':id' => $id,
      );
      return $this->db->query($query, $params);
    }

    public function update() {
      $query = "UPDATE comments SET content = :content, updated_at = NOW() WHERE id = :id";
      $query_params = array(
        ':content' => $this->content,
        ':id' => $this->id,
      );
      return $this->db->query($query, $query_params);
    }

    public function delete() {
      $query = "DELETE FROM comments WHERE id = :id";
      $params = array(
        ':id' => $this->id,
      );
      return $this->db->query($query, $params);
    }

    public function author() {
      $query = "SELECT * FROM users WHERE id = :user_id";
      $params = array(
        ':user_id' => $this->user_id,
      );
      return $this->db->query($query, $params);
    }

    public function post() {
      $query = "SELECT * FROM posts WHERE id = :post_id";
      $params = array(
        ':post_id' => $this->post_id,
      );
      return $this->db->query($query, $params);
    }
}
?>