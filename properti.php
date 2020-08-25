<?php
    class Mobil{
        var$warna;
        var$merek;
        var$berat;
        var$tipe;
    public function  maju(){
        return "mobil maju";
    }
    public function mundur(){
        return "mobil mundur";
    }
    }
$mobil_a = new mobil();
echo $mobil_a->maju();
echo $mobil_a->mundur();
?>    
