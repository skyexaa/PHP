<?php
//array scalar (1 dimensi)
$m1 = ['kode'=>'m1','nim'=>2020026781,'nama'=>'Ahmad Taufiq','nilai'=>55];
$m2 = ['kode'=>'m2','nim'=>2020029898,'nama'=>'','Albert Putumayang','nilai'=>48];
$m3 = ['kode'=>'m3','nim'=>2020126771,'nama'=>'','Jhonsena Siregar','nilai'=>95];
$m4 = ['kode'=>'m4','nim'=>2020178912,'nama'=>'','Atta Badai','nilai'=>80];
$m5 = ['kode'=>'m5','nim'=>2020178467,'nama'=>'','Ryna Majalelang','nilai'=>75];
$m6 = ['kode'=>'m6','nim'=>2020191891,'nama'=>'','Albert Swing','nilai'=>70];
$m7 = ['kode'=>'m7','nim'=>2020917190,'nama'=>'','Andalika Kursiun','nilai'=>80];
$m8 = ['kode'=>'m8','nim'=>2020101920,'nama'=>'','Alex Kimochi','nilai'=>80];
$m9 = ['kode'=>'m9','nim'=>2020910192,'nama'=>'','Krisjon Situmeang','nilai'=>79];
$m10 = ['kode'=>'m10','nim'=>2020090878,'nama'=>'','Anggina Na Loak','nilai'=>68];

$ar_judul = ['No','Nim','Nama','Nilai','keterangan','Grade','Predikat'];

//array assosiative (> 1 dimensi)
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
$jml_nilai = array_column($mahasiswa,'nilai');
$total_nilai = array_sum($jml_nilai);
$max_nilai = max($jml_nilai);
$min_nilai = min($jml_nilai);
$nilai_rata2 = $total_nilai / $jumlah_mahasiswa;
//keterangan
$keterangan = [
    'Nilai Tertinggi'=>$max_nilai,
    'Nilai Terendah'=>$min_nilai,
    'Nilai Rata-Rata'=>$nilai_rata2,
    'Jumlah mahasiswa'=>$jumlah_mahasiswa
];
?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daftar Nilai Mahasiswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>

    <body>
        <h3 class="text-center">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <?php
                    foreach($ar_judul as $jdl){
                    ?>
                    <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach($mahasiswa as $nilai){
                //rumus2
                $bruto = $nama['nama']* $nilai['nilai'];
                $hrg_diskon = $diskon * $bruto;
                $netto = $bruto - $hrg_diskon;
                ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $nilai['nim'] ?></td>
                    <td><?= $nilai['nama'] ?></td>
                    <td><?= $nilai['nilai'] ?></td>
                    <td><?= $bruto ?></td>
                    <td><?= $bruto ?></td>
                    <td><?= $hrg_diskon ?></td>
                    <td align="right"><?= number_format($netto,0,',','.') ?></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($keterangan as $ket => $hasil) {
                ?>
                <tr>
                    <th colspan="7"><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>

</html>