<?php 
class Komik extends Hobi implements InfoHobi {
    public $jmlHalaman;  

    public function __construct($judul ="judul",$penerbit ="penerbit",$gendre="gendre",
    $harga =0,$jmlHalaman =0)
    {
      parent::__construct($judul ,$penerbit ,$gendre,
      $harga);

      $this->jmlHalaman =$jmlHalaman;
    }

    public function getInfo(){
      $str =" {$this->judul} | {$this->getLabel()} (Rp .{$this->harga})";
   
      return $str;
    }  
  
    public function getInfoHobi()
    {
    $str =" Komik : " . $this->getInfo() ."  | ~ {$this->jmlHalaman}  Halaman .";
       
    return $str;
    }  
}
