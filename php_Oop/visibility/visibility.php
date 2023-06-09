<?php 
//tipe data ada 2 
//tipe data primitif yaitu ada tipe data string ,int,bolean
//tipe data array 

//visibility ada 3
//public = untuk semua 
//protected = hanya untuk keturunan nya
//private = hanya bisa di gunakan di dalam class /tidak untuk di luar

use CetakInfoHobi as GlobalCetakInfoHobi;

class Hobi{
  //membaca komik,
  public $judul ='judul',
  $penerbit ='penerbit',
  $gendre ='gendre';

  protected $diskon =0;
  private $harga = 0;

 

  public function getHarga(){
    return $this->harga - ($this->harga * $this->diskon /100 );
  }

  public function __construct($judul ="judul",$penerbit ="penerbit",$gendre="gendre",
        $harga =0 ){
    $this->judul =$judul;
    $this->penerbit =$penerbit;
    $this->gendre =$gendre;
    $this->harga =$harga;
    }

  public function getLabel(){
      return "$this->penerbit , $this->gendre";
  }

  public function getInfoLengkap(){
    //komik : Naruto | shounen jump , ninja (rp.30.000) | halaman .
    $str =" {$this->judul} | {$this->getLabel()} (Rp .{$this->harga})";
 
    return $str;
  }

}

class Komik extends Hobi{
    public $jmlHalaman;  

    public function __construct($judul ="judul",$penerbit ="penerbit",$gendre="gendre",
    $harga =0,$jmlHalaman =0)
    {
      parent::__construct($judul ,$penerbit ,$gendre,
      $harga);

      $this->jmlHalaman =$jmlHalaman;
    }
  
    public function getInfoLengkap()
    {
    $str =" Komik : " . parent::getInfoLengkap() ."  | ~ {$this->jmlHalaman}  Halaman .";
      
    return $str;
    }  
}

class Game extends Hobi{
  public $waktuMain;

  public function __construct($judul ="judul",$penerbit ="penerbit",$gendre="gendre",
  $harga =0 ,$waktuMain =0 )
  {
    parent::__construct($judul,$penerbit ,$gendre,
    $harga);
    $this->waktuMain =$waktuMain;
  }

  public function setDiskon($diskon){
    $this->diskon =$diskon ;
  }

  public function getInfoLengkap()
  {
    $str ="Game : ". parent::getInfoLengkap() ." - {$this->waktuMain} Jam .";

    return $str; 
  }
}

class CetakInfoHobi{
    public function cetak(Hobi $hobi ){
      $str ="{$hobi->getLabel()} | {$hobi->gendre} | (RP. {$hobi->harga})";
      return $str;
    }
} 

$hobi1 =new Komik("naruto","sounen JUmp","action",30000,100,) ;
echo"<hr>"; 
$hobi2 =new Game("Call Of Duty III","FPS","Action",80000,46,);

echo $hobi1->getInfoLengkap();
echo"<br>";
echo $hobi2->getInfoLengkap();

echo"<hr>";
$hobi2->setDiskon(60);
echo $hobi2->getharga();