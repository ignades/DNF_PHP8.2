<?php
interface X {
 public function foo((X&Y) | string | null $param);
}

interface Y extends X {
 public function foo2((X&Y) | string | null $param);
}


class Something implements X, Y {
  
  public $xAndY;

  public function foo( (X&Y) | string | null $param) {
    //var_dump($param);

    if( $param === null){

      echo "Parametro null!";
    
    } 
  }

  public function foo2( (X&Y) | string | null $param) {
    echo "Prueba";
  }


}

$something = new Something();
$something->foo("nacho");
 