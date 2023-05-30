<?php 
class Game extends Hobi implements InfoHobi {
  public $waktuMain;

  public function __construct($judul ="judul",$penerbit ="penerbit",$gendre="gendre",
  $harga =0 ,$waktuMain =0 )
  {
    parent::__construct($judul,$penerbit ,$gendre,
    $harga);
    $this->waktuMain =$waktuMain;
  }

  public function getInfo(){
    $str =" {$this->judul} | {$this->getLabel()} (Rp .{$this->harga})";
 
    return $str;
  }

  public function getInfoHobi()
  {
    $str ="Game : ". $this->getInfo() ." - {$this->waktuMain} Jam .";

    return $str; 
  }
}
