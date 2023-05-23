<?php 

class Hobi{
    //membaca komik,
    public $judul ='judul',
            $type ='type',
            $gendre ='',
            $harga = 0;  

    public function __construct($judul,$type,$gendre,$harga){
      $this->judul =$judul;
      $this->type =$type;
      $this->gendre =$gendre;
      $this->harga =$harga;
      }

    public function getLabel(){
        return "$this->judul , $this->gendre";
    }
}

$Hobi1 =new Hobi("naruto","sounen","action",30000 );


echo"<hr>";
$Hobi2 =new Hobi("Pubg","fps","perang",0);



echo "<br>";
echo "komik : " .$Hobi1->getLabel();
echo "<br>"; 
echo "Game : " .$Hobi2->getLabel();

//pppppppp