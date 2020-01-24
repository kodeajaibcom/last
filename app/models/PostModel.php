<?php

class PostModel {

  private $tbl_name = 'tbl_posts';
  private $db;

  public function __construct() {
    $this->db = new Database;
  }

  public function getAllPosts() {
    $this->db->query('SELECT * FROM '. $this->tbl_name);
    return $this->db->resultSet();
  }

  public function getPostsById($id) {
    $this->db->query('SELECT * FROM '. $this->tbl_name . ' WHERE idPost=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

}
