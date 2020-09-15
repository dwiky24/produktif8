<?php
class manusia{
  public $nama, 
         $nis;
         protected $rayon;
         private $nilai;

  public function getCetak(){
    return "$this->nama $this->nis  ( $this->nilai)";
  }
  public function __construct($nama="nama", $nis="nis", $nilai="340", $rayon="rayon"){
    $this->nama = $nama;
    $this->nis=$nis;
    $this->nilai=$nilai;
    $this->rayon=$rayon;
  }

    public function cetakInfo(){
        $str="{$this->nama}, {$this->getCetak()}";
        return $str;
    }

    public function getnilai(){
        return $this->nilai - ($this->nilai * $this->jumlah/ 100 );
    }
}

class yesi extends manusia{
    public $rayon;
    public function __construct($nama, $nis, $nilai, $rayon){
        parent::__construct($nama, $nis, $nilai);
        $this->rayon=$rayon;
    }
    public function cetakInfo(){
        $str="Nama : ".parent::getCetak()." | Rayon : {$this->rayon}";
        return $str;
    }
    public function setjumlah($jumlah){
        $this->jumlah=$jumlah;
    }
}

class puji extends manusia{
    public $rayon;
    public function __construct($nama, $nis, $nilai, $rayon){
        parent::__construct($nama, $nis, $nilai);
    }
    public function cetakInfo(){
        $str="Nama :  ".parent::getCetak()." | Rayon: {$this->rayon}";
        return $str;
    }
}

$nama1 = new yesi("YESI ASVIA","11907599",184,"CISARUA 1");
$nama2 = new puji("PUJI AYU LESTARI","11907443",181,"WIKRAMA 5");


echo $nama1->cetakInfo();
echo "<br>";
echo $nama2->cetakInfo();
echo "<br>";
echo "<hr>";
echo "<hr>";
$nama1->setjumlah(50);
echo $nama1->getnilai();
?>
