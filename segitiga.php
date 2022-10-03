<?php
require_once 'indukclass.php';

class Segitiga extends Tugas5{
    public $sisiMiring;
    static $alas = 45;
    static $tinggi = 24;

    public function namaBidang(){
        echo 'Segitiga Siku-siku';
    }

    public function sisiMiring(){
        $alas = self::$alas;
        $tinggi = self::$tinggi;
        $sisiMiring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
        return $sisiMiring;
    }

    public function luasBidang(){
        $alas = self::$alas;
        $tinggi = self::$tinggi;
        $luas = 0.2 * $alas * $tinggi;
        echo $luas;
    }

    public function kelilingBidang(){
        $sisiMiring = $this->sisiMiring();
        $alas = self::$alas;
        $tinggi = self::$tinggi;
        $keliling = $alas + $tinggi + $sisiMiring;
        echo $keliling;
    }

    public function keterangan(){
        echo 'Alas: '.self::$alas;
        echo '<br>Tinggi: '.self::$tinggi;
        echo '<br>Sisi Miring: '.$this->sisiMiring();
    }
}
?>