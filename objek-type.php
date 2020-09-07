<?php
    class produk{
    public $namabarang,
             $merk,
             $harga;
    
    public function getCetak(){
            return "$this->namabarang, $this->merk ,$this->harga";
        } 
        public function __construct($namabarang="nama barang",$merk="merk",$harga=0){
            $this->namabarang = $namabarang;
            $this->merk = $merk;
            $this->harga = $harga;
        }               
    }
    Class cetakInfoproduk{
        public function cetakinfo( produk $produk){
            $str="{$produk->namabarang},{$produk->getCetak()}";
            return $str;
        }
    } 

    $produk1 = new produk("ideapad s340","Lenovo",8000000);
    $produk2 = new produk("Flashdisk","sandisk",100000);
    $produk3 = new produk("Macbook Air","Apple",25000000);
    $produk4 = new produk("Mouse","Logitech",1200000);
    $infoProduk =new cetakInfoproduk();

    echo "Nama Barang 1: " . $produk1->getCetak();
    echo "<br>";
    echo "Nama barang 2: " . $produk2->getCetak();
    echo "<br>";
    echo "Nama Barang 3: " . $produk3->getCetak();
    echo "<br>";
    echo "Nama Barang 4: " . $produk4->getCetak();
    echo "<br>";
    echo $infoProduk->cetakinfo($produk3);
?>