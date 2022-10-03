<?php
require_once 'lingkaran.php';
require_once 'persegi_panjang.php';
require_once 'segitiga.php';

$lingkrn = new Lingkaran();
$persegiPjg = new PersegiPanjang();
$segitigaSk = new Segitiga();

$bentukBidang = [$lingkrn, $persegiPjg, $segitigaSk];
$ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<table class="mx-5 table table-bordered">
<thead class="table-info"><br><h4 align="center">Perhitungan Bangun Ruang</h4> <br>
    <tr>
        <?php
        foreach ($ar_judul as $judul) {
            ?><th class="text-center" scope="col"><?= $judul ?></th><?php
        }?>
    </tr>
</thead>
<tbody>
    <?php
    $no = 1;
    foreach ($bentukBidang as $bidang) {
        ?>
        <tr>
            <td class="text-center" scope="col"><?= $no++ ?></td>
            <td ><?= $bidang->namaBidang() ?></td>
            <td ><?= $bidang->keterangan() ?></td>
            <td class="text-center" scope="col"><?= $bidang->luasBidang() ?></td>
            <td class="text-center" scope="col"><?= $bidang->kelilingBidang() ?></td>
        </tr>
    <?php
    }
    ?>
    
</tbody>
</table>