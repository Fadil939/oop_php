<?php 
//tipe data ada 2 
//tipe data primitif yaitu ada tipe data string ,int,bolean
//tipe data array 

class Hobi{
  //membaca komik,
  public $judul ='judul',
          $type ='type',
          $gendre ='gendre',
          $harga = 0;  

  public function __construct($judul,$type,$gendre,$harga){
    $this->judul =$judul;
    $this->type =$type;
    $this->gendre =$gendre;
    $this->harga =$harga;
    }

  public function getLabel(){
      return "$this->judul , $this->type";
  }
  
}
class CetakInfoHobi{
    public function cetak(Hobi $hobi ){
      $str ="{$hobi->getLabel()} | {$hobi->gendre} | {$hobi->harga}";
      return $str;
    }
}

$hobi1 =new Hobi("naruto","sounen","action",30000 );
echo"<hr>"; 
$hobi2 =new Hobi("Pubg","fps","perang",0);



echo "<br>";
echo "komik : " .$hobi1->getLabel();
echo "<br>"; 
echo "Game : " .$hobi2->getLabel();
echo "<br>";  
$infoHobi1 = new CetakInfoHobi();
echo $infoHobi1->cetak($hobi1);

//pppppppp

