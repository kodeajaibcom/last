<?php

/**
 * Class Controller
 * Harison matondang
 * harisonmatondang@gmail.com
 * (c) Copyright 2020:
 * www.phpsync.com
 */

class Home extends Controller {
  public function index() {
    $data['title'] = 'Beranda';
    $this->v('templates/header', $data);
    $this->v('home/index');
    $this->v('templates/footer');
  }
}
