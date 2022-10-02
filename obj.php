<?php
  require 'pegawai.php';
  
  //instance object
  $p1 = new Pegawai('001', 'Jhonathan Sangkuriang', 'Manager', 'Islam', 'Belum Menikah');
  $p2 = new Pegawai('002', 'Muhammad Alfatih', 'Asisten Manager', 'Islam', 'Belum Menikah');
  
  //panggil fungsi
  echo '<h3 align="center">'.Pegawai::PT.'</h3><br />';
  $p1->mencetak();
  $p2->mencetak();
?>