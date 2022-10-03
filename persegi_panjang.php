<?php
require_once 'indukclass.php';

class PersegiPanjang extends Tugas5{
    static $panjang = 42;
    static $lebar = 16;

    public function namaBidang(){
        echo 'Persegi Panjang';
    }

    public function luasBidang(){
        $panjang = self::$panjang;
        $lebar = self::$lebar;
        $luas = $panjang * $lebar;
        echo $luas;
    }

    public function kelilingBidang(){
        $panjang = self::$panjang;
        $lebar = self::$lebar;
        $keliling = 2 * ($panjang + $lebar);
        echo $keliling;
    }

    public function keterangan(){
        echo 'Panjang: '.self::$panjang;
        echo '<br>Lebar: '.self::$lebar;
    }
}
?>