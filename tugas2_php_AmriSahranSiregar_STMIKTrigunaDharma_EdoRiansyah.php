<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h3 class="text-center">DATA PEGAWAI</h3>
    <div class="container px-5 my-5">
        <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="POST">
            <div class="form-floating mb-3">
                <input class="form-control" id="namePegawai" type="text" placeholder="Name pegawai" data-sb-validations="required" name="nama" />
                <label for="namePegawai">Name Pegawai</label>
                <div class="invalid-feedback" data-sb-feedback="namePegawai:required">Name pegawai is required.</div>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" id="agama" aria-label="agama" name="agama">
                    <option value="none"> </option>
                    <option value="Islam"> Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
                <label for="agama">agama</label>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">jabatan</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jabatan" value="Manager" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Manager
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jabatan" value="Assisten" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Asissten
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jabatan" value="Kabag" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Kabag
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jabatan" value="Staff" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Staff
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block" name="status">status</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="menikah" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Menikah
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="status" value="belum" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Belum Menikah
                    </label>
                </div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="jumlahAnak" type="text" placeholder="Jumlah anak" data-sb-validations="required" name="jumlahanak" />
                <label for="jumlahAnak">Jumlah anak</label>
                <div class="invalid-feedback" data-sb-feedback="jumlahAnak:required">Jumlah anak is required.</div>
            </div>


            <button type="submit" class="btn btn-success" name="proses">Save</button>
        </form> <br>

        <!-- PHP -->
        <?php
        // variabel php
        $nama = $_POST['nama'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlahanak = $_POST['jumlahanak'];
        $tombol = $_POST['proses'];

        switch ($jabatan) {
            case 'Manager':
                $gaji_pokok = 20000000;
                break;
            case 'Assisten':
                $gaji_pokok = 15000000;
                break;
            case 'Kabag':
                $gaji_pokok = 10000000;
                break;
            case 'Staff':
                $gaji_pokok = 4000000;
                break;
            default:
                $gaji_pokok;
                break;
        }

        switch ($jabatan) {
            case 'Manager':
                $tjabatan = 20000000 * 0.2;
                break;
            case 'Assisten':
                $tjabatan = 15000000 * 0.2;
                break;
            case 'Kabag':
                $tjabatan = 10000000 * 0.2;
                break;
            case 'Staff':
                $tjabatan = 4000000 * 0.2;
                break;
            default:
                $gaji_pokok;
                break;
        }

        if ($status = 'menikah' && $jumlahanak <= 2) {
            $tkeluarga = ($gaji_pokok * 0.005);
            $gaji_kotor = $gaji_pokok + $tkeluarga + $tjabatan;

            if ($agama == 'Islam' && $gaji_kotor >= 6000000) {
                $z_profesi = ($gaji_kotor * 0.025);
            } else {
                $z_profesi = 0;
            }
            $take_home = $gaji_kotor - $z_profesi;
        } else if ($status = 'menikah' && $jumlahanak >= 3) {
            $tkeluarga = ($gaji_pokok * 0.1);
            $gaji_kotor = $gaji_pokok + $tkeluarga + $tjabatan;

            if ($agama == 'Islam' && $gaji_kotor >= 6000000) {
                $z_profesi = ($gaji_kotor * 0.025);
            } else {
                $z_profesi = 0;
            }
            $take_home = $gaji_kotor - $z_profesi;
        } else if ($status = 'menikah' && $jumlahanak >= 6) {
            $tkeluarga = ($gaji_pokok * 0.15);
            $gaji_kotor = $gaji_pokok + $tkeluarga + $tjabatan;

            if ($agama == 'Islam' && $gaji_kotor >= 6000000) {
                $z_profesi = ($gaji_kotor * 0.025);
            } else {
                $z_profesi = 0;
            }
            $take_home = $gaji_kotor - $z_profesi;
        } else $tkeluarga = 'belum';


        if (isset($tombol)) { ?>
            <div class="card" style="width: 100%;">
                <div class="body">
                    <div class=" alert alert-primary p-5" role="alert">
                    <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?=$nama?>" disabled >
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Agama:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?=$agama?>"  disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Jabatan:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?=$jabatan?>"  disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Gaji Pokok:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?= number_format($gaji_pokok, 2, ',', '.'); ?>"  disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tunjangan Jabatan:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?=number_format($tjabatan, 2, ',', '.');?>"  disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Tunjangan Keluarga:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?=number_format($tkeluarga, 2, ',', '.');?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Gaji Kotor:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?=number_format($gaji_kotor, 2, ',', '.');?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Zakat Profesi:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?=number_format($z_profesi, 2, ',', '.');?>" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Take Home Pay:</label>
                                    <input type="text" class="form-control" id="recipient-name" value="<?= number_format($take_home, 2, ',', '.');?>" disabled>
                                </div>

                    </div>
                </div>
            </div>
        <?php } ?>



    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>