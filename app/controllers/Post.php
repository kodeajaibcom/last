<?php

/**
 * Class Post
 * Harison matondang
 * harisonmatondang@gmail.com
 * (c) Copyright 2020:
 * www.phpsync.com
 */

class Post extends Controller {

  public function index() {
    $data['title'] = 'Berita';
    $data['posts'] = $this->m('PostModel')->getAllPosts();
    $this->v('templates/header', $data);
    $this->v('post/index', $data);
    $this->v('templates/footer');
  }

  public function baca($id) {
    $data['title'] = 'Berita';
    $data['posts'] = $this->m('PostModel')->getPostsById($id);
    $this->v('templates/header', $data);
    $this->v('post/baca', $data);
    $this->v('templates/footer');
  }
}
