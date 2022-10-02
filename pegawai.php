<?php 
  class Pegawai{
    //member1 variabel
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    
    //variabel konstanta di dalam class
    const PT = 'PT. Aditing Software Developer';
    
    //member2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status) {
      $this->nip = $nip; 
      $this->nama = $nama;
      $this->jabatan = $jabatan;
      $this->agama = $agama;
      $this->status = $status;
    }
    
    //member3 method
    public function setGapok($jabatan){
      $this->jabatan = $jabatan;
      switch($jabatan){
        case 'Manager': $gapok = 15000000; break;
        case 'Asisten Manager': $gapok = 10000000; break;
        case 'Kepala Bagian': $gapok = 7000000; break;
        case 'Staff': $gapok = 4000000; break;
        default: $gapok;
      }
      return $gapok;
    }
    public function setTunjab(){
      $tunjab = 0.2 * $this->setGapok($this->jabatan);
      return $tunjab;
    }
    public function setTunkel($status){
      $this->status = $status;
      
      //tunjangan keluarga
      $tunkel = ($status == 'Menikah') ? 0.1 * $this->setGajipok($this->jabatan) : 0;
      return $tunkel;
    }
    public function setGator(){
      $gator = $this->setGapok($this->jabatan) + $this->setTunjab() + $this->setTunkel($this->status);
      return $gator;
    } 
    public function setZakatProfesi($agama){
      $this->agama = $agama;
      //zakat profesi
      $zafes = ($agama == 'Islam' && $this->setGator() >= 6000000) ? 0.025 * $this->setGapok($this->jabatan) : 0;
      return $zafes;
    }
    public function setGasih(){
      $gasih = $this->setGator() - $this->setZakatProfesi($this->agama);
      return $gasih;
    }
    
    public function mencetak(){
      echo 'NIP Pegawai : '.$this->nip;
      echo '<br />Nama Pegawai : '.$this->nama;
      echo '<br />Jabatan : '.$this->jabatan;
      echo '<br />Agama : '.$this->agama;
      echo '<br />Status : '.$this->status;
      echo '<br />Gaji Pokok : Rp. '.number_format($this->setGapok($this->jabatan), 0, ',', '.');
      echo '<br />Tunjangan Jabatan : Rp. '.number_format($this->setTunjab(), 0, ',', '.');
      echo '<br />Tunjangan Keluarga : Rp. '.number_format($this->setTunkel($this->status), 0, ',', '.');
      echo '<br />Zakat Profesi : Rp. '.number_format($this->setZakatProfesi($this->agama), 0, ',', '.');
      echo '<br />Gaji Bersih : Rp. '.number_format($this->setGasih(), 0, ',', '.');
      echo '<hr /><br />';
    }
  }
?>