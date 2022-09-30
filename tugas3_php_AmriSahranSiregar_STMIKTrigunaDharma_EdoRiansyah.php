<?php
//array scalar (1 dimensi)
$m1 = ['nim'=>'2020026781','nama'=>'Ahmad Taufiq','nilai'=>'55'];
$m2 = ['nim'=>'2020029898','nama'=>'Albert Putumayang','nilai'=>'48'];
$m3 = ['nim'=>'2020126771','nama'=>'Jhonsena Siregar','nilai'=>'95'];
$m4 = ['nim'=>'2020178912','nama'=>'Atta Badai','nilai'=>'80'];
$m5 = ['nim'=>'2020178467','nama'=>'Ryna Majalelang','nilai'=>'75'];
$m6 = ['nim'=>'2020191891','nama'=>'Albert Swing','nilai'=>'70'];
$m7 = ['nim'=>'2020917190','nama'=>'Andalika Kursiun','nilai'=>'80'];
$m8 = ['nim'=>'2020101920','nama'=>'Alex Kimochi','nilai'=>'80'];
$m9 = ['nim'=>'2020910192','nama'=>'Krisjon Situmeang','nilai'=>'79'];
$m10 = ['nim'=>'2020090878','nama'=>'Anggina Na Loak','nilai'=>'68'];

$ar_judul = ['NO','NIM','NAMA','NILAI','KETERANGAN','GRADE','PREDIKAT'];
//array assosiative (> 1 dimensi)
$nama_mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

//aggregate function in array
$jumlah_siswa = count($nama_mahasiswa);
$jml_nilai = array_column($nama_mahasiswa,'nilai');
$max = max($jml_nilai);
$min = min($jml_nilai);
$total = array_sum($jml_nilai);
$rata2 = $total / $jumlah_siswa;

//keterangan
$Keterangansiswa = ['jumlah siswa' => $jumlah_siswa,
                    'Nilai Tertinggi' => $max,
                    'Nilai Terendah' => $min,
                    'Total Nilai' => $total, 
                    'Rata-rata'=> $rata2 ]; 
?>

<!doctype html>
<html lang="en">
    <head>
       <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>Belajar Array</title>
    </head>

    <body> <br>
        <h3 class="text-center">DATA NILAI MAHASISWA</h3><hr>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <?php
                    foreach ($ar_judul as $jdl) {
                    ?>
                        <th>
                            <?= $jdl; ?>
                        </th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    foreach ($nama_mahasiswa as $nama) {
                        // Rumus2
                        $keterangan = ($nama['nilai']) >=  60 ? 'Lulus' : 'Tidak lulus';
                        if($nama['nilai'] >= 85 && $nama['nilai']  <= 100) {
                            $grade = 'A';
                            $predikat = 'Memuaskan';
                        }
                        else if ($nama['nilai']  >= 75 && $nama['nilai']  < 85){
                            $grade = 'B';
                            $predikat = 'Baik';
                        }
                        else if ($nama['nilai']  >= 60 && $nama['nilai']  < 75){
                            $grade = 'C';
                            $predikat = 'Cukup';
                        }
                        else if ($nama['nilai']  >= 50 && $nama['nilai']  < 60){
                            $grade = 'D';
                            $predikat = 'Sangat Cukup';
                        }

                        else if ($nama['nilai']  >= 0 && $nama['nilai']  < 50) {
                            $grade = 'E';
                            $predikat = 'Buruk';
                        }

                        else {
                            $grade = '';
                        }
                ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $nama['nim']; ?></td>
                        <td><?= $nama['nama']; ?></td>
                        <td><?= $nama['nilai']; ?></td>
                        <td><?= $keterangan; ?></td>
                        <td><?= $grade; ?></td>
                        <td><?= $predikat; ?></td>
                    </tr>
                <?php $no++; }
                 ?>
            </tbody>

            <?php
            foreach ($Keterangansiswa as $ket => $hasil) { 
            ?>
                <tfoot>
                    <tr>
                        <th colspan="7"><?= $ket?>
                        </th>
                        <th><?= $hasil ?>
                        </th>
                    </tr>
                <?php } ?>
                </tfoot>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    </body>
</html>
