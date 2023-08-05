<?php
include 'model/koneksi.php';


?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Penilaian Reliability</h1>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Bobot</title> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card border-success">
            <div class="card-header text-white bg-success">
                Input Reliability
            </div>
            <div class="card-body">
                <hr>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Id_Reliability</label>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="id_reliability" name="id_reliability"
                                value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Pilih Nama Uji</label>
                        <div class="col-sm-10">
                            <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                            <select class="form-control" name="uji" required>
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `hasil_akhir`");

                                while($data = mysqli_fetch_array($query)) {
                                    ?>
                                <option value="<?php echo $data['id']?>"><?php echo $data['nama_hasil']?></option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Accuracy</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_accuracy" class="form-control" name="accuracy" id="tampil1"
                                onchange="myfunction(this)">
                                <option value="">- Pilih -</option>
                                <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Accuracy'");
                                if (mysqli_num_rows($query)>0) {

                                    while($data = mysqli_fetch_array($query)) {
                                        ?>
                                <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot" name="bobot" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_accuracy1"
                                        name="avg_accuracy1" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_accuracy"
                                        name="wncn_accuracy" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Accuracy</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_accuracy" class="form-control" name="accuracy1" id="tampil2"
                                onchange="myfunction1(this)">
                                <option value="">- Pilih -</option>
                                <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Accuracy'");
                                    if (mysqli_num_rows($query)>0) {

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot1" name="bobot1" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_accuracy2"
                                        name="avg_accuracy2" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil1()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_accuracy1"
                                        name="wncn_accuracy1" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Accuracy</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_accuracy" class="form-control" name="accuracy2" id="tampil3"
                                onchange="myfunction2(this)">
                                <option value="">- Pilih -</option>
                                <?php
                                        include '/../../../model/koneksi.php';

                                        $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Accuracy'");
                                        if (mysqli_num_rows($query)>0) {

                                            while($data = mysqli_fetch_array($query)) {
                                                ?>
                                <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot2" name="bobot2" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_accuracy3"
                                        name="avg_accuracy3" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil2()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_accuracy2"
                                        name="wncn_accuracy2" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">4. Pertanyaan Accuracy</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_accuracy" class="form-control" name="accuracy3" id="tampil4"
                                onchange="myfunction3(this)">
                                <option value="">- Pilih -</option>
                                <?php
                                            include '/../../../model/koneksi.php';

                                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Accuracy'");
                                            if (mysqli_num_rows($query)>0) {

                                                while($data = mysqli_fetch_array($query)) {
                                                    ?>
                                <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot3" name="bobot3" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_accuracy4"
                                        name="avg_accuracy4" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil3()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_accuracy3"
                                        name="wncn_accuracy3" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_akhiraccuracy()">Hasil
                            Accuracy</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilnya" name="hasilnya" value=""
                                readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Error Tolerancy</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_accuracy" class="form-control" name="tolerancy" id="tampil6"
                                onchange="myfunction5(this)">
                                <option value="">- Pilih -</option>
                                <?php
                                                    include '/../../../model/koneksi.php';

                                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Error Tolerancy'");
                                                    if (mysqli_num_rows($query)>0) {

                                                        while($data = mysqli_fetch_array($query)) {
                                                            ?>
                                <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot5" name="bobot5" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_error" name="avg_error"
                                        value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_erorr()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wncn_error" name="wncn_error"
                                        value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_akhirerror()">Hasil
                            Error Tolerancy</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilerror" name="hasilerror" value=""
                                readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">1. Pertanyaan
                            Simplicity</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_accuracy" class="form-control" name="tolerancy" id="tampil7"
                                onchange="myfunction6(this)">
                                <option value="">- Pilih -</option>
                                <?php
                                                    include '/../../../model/koneksi.php';

                                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Simplicity'");
                                                    if (mysqli_num_rows($query)>0) {

                                                        while($data = mysqli_fetch_array($query)) {
                                                            ?>
                                <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot7" name="bobot7" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_simplicity"
                                        name="avg_simplicity" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_simplicity()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wcnc_simplicity"
                                        name="wcnc_simplicity" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">2. Pertanyaan
                            Simplicity</label>
                        <div class="col-sm-10">
                            <select name="pertanyaan_accuracy" class="form-control" name="tolerancy" id="tampil8"
                                onchange="myfunction7(this)">
                                <option value="">- Pilih -</option>
                                <?php
                                                    include '/../../../model/koneksi.php';

                                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Simplicity'");
                                                    if (mysqli_num_rows($query)>0) {

                                                        while($data = mysqli_fetch_array($query)) {
                                                            ?>
                                <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                <?php } } ?>
                            </select>
                        </div>
                    </div>
                    <div class="container mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="" class="form-label">Bobot</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="bobot8" name="bobot8" value=""
                                        readonly>
                                </div>
                            </div>
                            <div class="col">
                                <label for="" class="form-label">Average</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="avg_simplicity1"
                                        name="avg_simplicity1" value="">
                                </div>
                            </div>
                            <div class="col order-1">
                                <label for="" class="form-label"></label>
                                <button type="button" class="btn btn-success col-md-3" style="margin-top: 26px;"
                                    onclick="hasil_simplicity1()">
                                    Hasil</button>
                            </div>
                            <div class="col order-5">
                                <label for="" class="form-label">wncn</label>
                                <div class="">
                                    <input type="text" class="form-control col-md-3" id="wcnc_simplicity1"
                                        name="wcnc_simplicity1" value="" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success"
                            onclick="hasil_akhirsimplicity()">Hasil
                            Simplicity</button>
                        <div class="col order-5">
                            <input type="text" class="form-control col-md-1" id="hasilakhirs" name="hasilakhirs"
                                value="" readonly>
                        </div>
                    </div>
                    <hr>
                    <div class="mb-3 row">
                        <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_keseluruhan()">Hasil
                            Akhir</button>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Nilai Reliability</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-md-1" id="n_corec" name="n_corec" value=""
                                readonly>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label">Persentase Reliability</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control col-md-1" id="p_corec" name="p_corec" value="%"
                                readonly>
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="" class="col-sm-2 col-form-label">Kategori Kelayakan</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control col-md-4" id="k_corec" name="k_corec" value=""
                                readonly>
                        </div>
                    </div>
                    <hr>
                    <!-- batas -->
                    <div class=" col-12">
                        <input type="submit" name="save" value="Save" class="btn btn-outline-success" />
                        <button type="reset" class="btn btn-outline-warning">Reset Form</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

                        if (isset($_POST['save'])) {
                            $id_reliability = $_POST['id_reliability'];
                            $nilai_accuracy = $_POST['hasilnya'];
                            $nilai_errortolerancy = $_POST['hasilerror'];
                            $nilai_simplicity = $_POST['hasilakhirs'];
                            $nilai_reliability = $_POST['n_corec'];
                            $persentase = $_POST['p_corec'];
                            $kategori = $_POST['k_corec'];
                            $uji = $_POST['uji'];



                             // proses insert and validasi
                            $cek_data3 = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_hasilakhir = '$uji' AND id_sumber = '$id_reliability' "));
                            if ($cek_data3 > 0) {
                                $update = $koneksi->query("update reliability set nilai_accuracy = '$nilai_accuracy',nilai_errortolerancy='$nilai_errortolerancy',nilai_simplicity='$nilai_simplicity',nilai_reliability='$nilai_reliability',persentase='$persentase',kategori='$kategori' where id_reliability = '$id_reliability'");

                                     if($update){
                                        echo"<script>alert('Pengeditan Berhasil');
                                            window.location='?page=pages/inputform/penilaian/reliability';
                                            </script>";
                                    }else{
                                        echo"<script>alert('Pengeditan Gagal');</script>";
                                           } 
                            }

                            else{
                                $cek_data = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_sumber = '$id_reliability'"));
                                if ($cek_data > 0) {
                                    echo "<script>alert('Pengujian sudah ada!');</script>";
                                    echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/reliability'>";
                                }else{

                                    $cek_data2 = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_hasilakhir = '$uji' AND tipe_sumber = 'reliability' "));
                                    if ($cek_data2 > 0){
                                         echo "<script>alert('Nama uji sudah dipakai ! Silahkan gunakan nama uji yang lain');</script>";
                                         echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/reliability'>";
                                    }

                                    else{
                                        $insert = $koneksi->query("INSERT INTO reliability(id_reliability, nilai_accuracy, nilai_errortolerancy, nilai_simplicity, nilai_reliability, persentase, kategori) VALUES ('$id_reliability', '$nilai_accuracy','$nilai_errortolerancy','$nilai_simplicity','$nilai_reliability','$persentase','$kategori')");
                                         $insert = $koneksi->query("INSERT INTO glue(id_hasilakhir, id_sumber, tipe_sumber) VALUES ('$uji', '$id_reliability','reliability')");


                                         if($insert){
                                            echo"<script>alert('Penambahan Berhasil');
                                            window.location='?page=pages/inputform/penilaian/reliability';
                                            </script>";
                                        }else{
                                            echo"<script>alert('Penambahan Gagal');</script>";
                                        }
                                    }


                                }
                            }

                    }

                    ?>

    <script>
    // Perhitungan Accuracy
    function hasil() {
        var bobot = $('#bobot').val();
        var avg = $('#avg_accuracy1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_accuracy").val(hasil);

    }

    function hasil1() {
        var bobot = $('#bobot1').val();
        var avg = $('#avg_accuracy2').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_accuracy1").val(hasil);

    }

    function hasil2() {
        var bobot = $('#bobot2').val();
        var avg = $('#avg_accuracy3').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_accuracy2").val(hasil);

    }

    function hasil3() {
        var bobot = $('#bobot3').val();
        var avg = $('#avg_accuracy4').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_accuracy3").val(hasil);

    }

    function hasil_akhiraccuracy() {
        var hasil1 = $('#wncn_accuracy').val();
        var hasil2 = $('#wncn_accuracy1').val();
        var hasil3 = $('#wncn_accuracy2').val();
        var hasil4 = $('#wncn_accuracy3').val();
        var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3) + Number(hasil4);
        $('#hasilnya').val(ketemu.toFixed(2));
    }


    // Perhitungan error tolerancy
    function hasil_erorr() {
        var bobot = $('#bobot5').val();
        var avg = $('#avg_error').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wncn_error").val(hasil);

    }

    function hasil_akhirerror() {
        var hasil1 = $('#wncn_error').val();
        var ketemu = Number(hasil1) * 1;
        $('#hasilerror').val(ketemu.toFixed(2));
    }


    // Perhitungan Simplicity
    function hasil_simplicity() {
        var bobot = $('#bobot7').val();
        var avg = $('#avg_simplicity').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wcnc_simplicity").val(hasil);

    }

    function hasil_simplicity1() {
        var bobot = $('#bobot8').val();
        var avg = $('#avg_simplicity1').val();
        var hasil = (bobot * avg).toFixed(2);
        $("#wcnc_simplicity1").val(hasil);

    }

    function hasil_akhirsimplicity() {
        var hasil1 = $('#wcnc_simplicity').val();
        var hasil2 = $('#wcnc_simplicity1').val();
        var ketemu = Number(hasil1) + Number(hasil2);
        $('#hasilakhirs').val(ketemu.toFixed(2));
    }


    function hasil_keseluruhan() {
        var total1 = $('#hasilnya').val();
        var total2 = $('#hasilerror').val();
        var total3 = $('#hasilakhirs').val();
        console.log(total1);
        console.log(total2);
        console.log(total3);
        var ketemu = ((Number(total1) + Number(total2) + Number(total3)) / 3);
        console.log(ketemu);
        $("#n_corec").val(ketemu.toFixed(2));


        var nilai_dapat = $('#n_corec').val();
        var hasilnya = ((Number(nilai_dapat) / 5) * 100);
        console.log(hasilnya);
        $('#p_corec').val(Math.round(hasilnya));



        if ((hasilnya >= 81) && (hasilnya <= 100)) {
            $('#k_corec').val("Sangat Baik");
        } else if ((hasilnya >= 61) && (hasilnya <= 80)) {
            $('#k_corec').val("Baik");
        } else if ((hasilnya >= 41) && (hasilnya <= 60)) {
            $('#k_corec').val("Cukup Baik");
        } else if ((hasilnya >= 21) && (hasilnya <= 40)) {
            $('#k_corec').val("Tidak Baik");
        } else if ((hasilnya >= 0) && (hasilnya <= 20)) {
            $('#k_corec').val("Sangat Tidak Baik");
        } else {
            $('#k_corec').val("");
        }

    }


    // tampil Accuracy
    function myfunction(selectElement) {

        var selectedValue = selectElement.value;
        var inputElement = document.getElementById("bobot");
        inputElement.value = selectedValue;

    }

    function myfunction1(selectElement) {

        var selectedValue = selectElement.value;
        var inputElement = document.getElementById("bobot1");
        inputElement.value = selectedValue;
    }

    function myfunction2(selectElement) {

        var selectedValue = selectElement.value;
        var inputElement = document.getElementById("bobot2");
        inputElement.value = selectedValue;
    }


    function myfunction3(selectElement) {

        var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot3");
            inputElement.value = selectedValue;
    }


    // tampil error tolerancy
    function myfunction5(selectElement) {

        var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot5");
            inputElement.value = selectedValue;
    }

    // tampil Simplicity
    function myfunction6(selectElement) {
        
        var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot7");
            inputElement.value = selectedValue;
    }

    function myfunction7(selectElement) {
        
        var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot8");
            inputElement.value = selectedValue;

    }

    </script>
</body>

</html>