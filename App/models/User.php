<?php
namespace App\Models;

class User extends Model {
    public $id;
    public $name;
    public $email;
    public $password;
    private $db;

    public function __construct($id, $name, $email, $password) {
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
      $this->created_at = date('Y-m-d H:i:s');
      $this->updated_at = date('Y-m-d H:i:s');
      $this->db = new Database;
    }

    public function create() {
      $query = "INSERT INTO users (name, email, password, created_at, updated_at) VALUES (:name, :email, :password, NOW(), NOW())";
      $params = array(
        ':name' => $this->name,
        ':email' => $this->email,
        ':password' => $this->password,
      );
      return $this->db->query($query, $params);
    }

    public function read($id) {
      $query = "SELECT (name, email, password) FROM users WHERE id = :id";
      $params = array(
        ':id' => $id,
      );
      return $this->db->query($query, $params);
    }


    public function update() {
      $query = "UPDATE users SET name = :name, email = :email, password = :password, updated_at = :updated_at WHERE id = :id";
      $params = array(
        ':name' => $this->name,
        ':email' => $this->email,
        ':password' => $this->password,
        ':updated_at' => $this->updated_at,
        ':id' => $this->id,
      );
      return $this->db->query($query, $params);
    }

    public function delete() {
      $query = "DELETE FROM users WHERE id = :id";
      $params = array(
        ':id' => $this->id,
      );
      return $this->db->query($query, $params);
    }

    public function posts() {
      $query = "SELECT * FROM posts WHERE user_id = :id";
      $params = array(
        ':id' => $this->id,
      );
      return $this->db->query($query, $params);
    }

    public function comments() {
      $query = "SELECT * FROM comments WHERE user_id = :id";
      $params = array(
        ':id' => $this->id,
      );
      return $this->db->query($query, $params);
    }
}
?>