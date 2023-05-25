<?php  
//define = tidak bisa digunakan di dalam class
//const = kebalikan dari define
 define('NAMA' ,'fadhlur');
 echo NAMA; 
 echo "<hr>";
  class Constant {
    const UMUR = 20;
  }

  echo Constant::UMUR;

  //Magic constant 
  //__LINE__ . __DIR__ . __FILE__ . __FUNCTION__ . __CLASS__ .__TRAIT__ .__METHOD__ . __NAMESPACE__ .
?>