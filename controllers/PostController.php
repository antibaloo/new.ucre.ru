<?php

namespace app\controllers;

class PostController extends AppController{
    
    public function actionIndex($name='Guest') {
      $hello = "Привет, мир!!!";
      $hi = "Hi!!!";
      return $this->render("index",compact('hello', 'hi', 'name'));
    }
    public function actionTest() {
        return $this->render("test");
    }
  
}