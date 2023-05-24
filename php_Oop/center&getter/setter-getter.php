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
  private $judul ='judul',
  $penerbit ='penerbit',
  $gendre ='gendre';
  private $diskon =0;
  private $harga = 0;
  
  public function getJudul(){
    return $this->judul;
  }
  public function setJudul($judul){
    if(!is_string($judul)){
      throw new Exception("Judul harus berupa String(huruf)", 1);
       
    }
    $this->judul =$judul;
  }
  public function getPenerbit(){
    return $this->penerbit;
  }

  public function setPenerbit($penerbit){
    $this->penerbit =$penerbit ;
  }

  public function getGendre(){
    return $this->gendre;
  }

  public function setGendre($gendre){
    $this->gendre =$gendre ;
  }

  public function setDiskon($diskon){
    $this->diskon =$diskon ;
  }
  
  public function setHarga($harga){
    $this->harga =$harga ;
  }
 
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
$hobi2->setDiskon(50);
$hobi2->setHarga(50000);
echo $hobi2->getPenerbit();