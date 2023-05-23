<?php 

class Hobi{
    //membaca komik,
    public $judul ='judul',
            $type ='type',
            $gendre ='',
            $harga = 0;  

    public function getLabel(){
        return "$this->judul , $this->gendre";
    }
}

$Hobi1 =new Hobi();
$Hobi1->judul="solo leveling";
$Hobi1->gendre="action,drama,super power";

echo "<br>";
echo "komik : " .$Hobi1->getLabel();