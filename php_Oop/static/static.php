<?php 
//static keyword 
//member yang terikat dengan class, bukan dengan object 
//nilai static akan selalu tetap bahkan ketika object di-inistalisasi berulang kali
//membuat seolah olah kode kita 'prosedural'
//biasanya digunakan untuk membuat fungsi bantuan / helper
// atau digunakan di class-class utility pada framework
class CobaStatic{

  public static $angka =100;

  public static function halo(){
    return "Hallo.INI static";
  }
}

echo "Number : " . CobaStatic::$angka;
echo "<hr>";
echo CobaStatic::halo();
