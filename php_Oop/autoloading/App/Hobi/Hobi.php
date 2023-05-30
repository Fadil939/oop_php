<?php 
abstract class Hobi{
  protected $judul,
  $penerbit,
  $gendre ,
  $harga,
  $diskon =0;
  
  public function __construct($judul ="judul",$penerbit ="penerbit",$gendre="gendre",
  $harga =0 ){
  $this->judul =$judul;
  $this->penerbit =$penerbit;
  $this->gendre =$gendre;
  $this->harga =$harga;
}
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


  public function getLabel(){
      return "$this->penerbit , $this->gendre";
  }

  abstract function getInfo();

}