<?php
require_once 'indukclass.php';

class Lingkaran extends Tugas5{
    static $jari = 50;

    public function namaBidang(){
        echo 'Lingkaran';
    }

    public function luasBidang(){
        $jari = Lingkaran::$jari;
        $luas = 3.14 * $jari * $jari;
        echo $luas;
    }

    public function kelilingBidang(){
        $jari = Lingkaran::$jari;
        $keliling = 2 * 3.14 * $jari;
        echo $keliling;
    }

    public function keterangan(){
        echo 'Jari-jari: '.self::$jari;
    }
}
?>