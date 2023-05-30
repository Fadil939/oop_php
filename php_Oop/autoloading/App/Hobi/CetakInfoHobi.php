<?php 
class CetakInfoHobi{
    public $daftarHobi= [];
    
    public function tambahHobi(Hobi $hobi){
      $this->daftarHobi[] = $hobi;
    }

    public function cetak(){
      $str ="Daftar Hobi <br>";

      foreach( $this->daftarHobi as $hb){
        $str .= "-{$hb->getInfoHobi()} <br>";
      } 

      return $str;
    }
} 
