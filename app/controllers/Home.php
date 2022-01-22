<?php
class Home extends Controller
{
  public function index($var1 = 'testing', $var2 = 'hapus klo ga perlu gan')
  {
    $name = $this->model("Home_model")->getUser();
    echo "Saya $name, ini $var1 dan $var2";
  }
}
