<?php 
//tipe data ada 2 
//tipe data primitif yaitu ada tipe data string ,int,bolean
//tipe data array 

use CetakInfoHobi as GlobalCetakInfoHobi;

class Hobi{
  //membaca komik,
  public $judul ='judul',
  $penerbit ='penerbit',
  $gendre ='gendre',
  $harga = 0,
  $jmlHalaman = 0,
  $waktuMain =0,  
  $type ='type';

  public function __construct($judul ="judul",$penerbit ="penerbit",$gendre="gendre",
        $harga =0 , $jmlHalaman =0 ,$waktuMain =0 ,$type='Type' ){
    $this->judul =$judul;
    $this->penerbit =$penerbit;
    $this->gendre =$gendre;
    $this->harga =$harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain =$waktuMain;
    $this->type =$type;
    }

  public function getLabel(){
      return "$this->penerbit , $this->gendre";
  }

  public function getInfoLengkap(){
    //komik : Naruto | shounen jump , ninja (rp.30.000) | halaman .
    $str ="{$this->type} : {$this->judul} | {$this->getLabel()} (Rp .{$this->harga})";
    if($this->type =="komik"){
      $str .= " ~ {$this->jmlHalaman} Halaman .";
    }else if ($this->type == "game"){
      $str .= " ~ {$this->waktuMain} Jam .";
    }
    return $str;
  }
  
}
class CetakInfoHobi{
    public function cetak(Hobi $hobi ){
      $str ="{$hobi->getLabel()} | {$hobi->gendre} | (RP. {$hobi->harga})";
      return $str;
    }
}

$hobi1 =new Hobi("naruto","sounen JUmp","action",30000,100,0,"komik") ;
echo"<hr>"; 
$hobi2 =new Hobi("Call Of Duty III","FPS","Action",80000, 0,46,"game");

//komik : Naruto | shounen jump , ninja (rp.30.000) | halaman .
//game : call of duty | Fps , action (RP 80.000) | 46jam.

echo $hobi1->getInfoLengkap();
echo"<br>";
echo $hobi2->getInfoLengkap();
