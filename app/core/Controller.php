<?php

/**
 * Class Controller
 * Harison matondang
 * harisonmatondang@gmail.com
 * (c) Copyright 2020:
 * www.phpsync.com
 */

class Controller{

  // views
  public function v($view, $data = []) {
    require '../app/views/' .$view. '.php';
  }

  // models
  public function m($model, $data = []) {
    require '../app/models/' .$model. '.php';
    return new $model;
  }

}
