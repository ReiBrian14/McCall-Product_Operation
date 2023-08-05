   <?php
   include 'model/koneksi.php';



   ?>

   <div class="content-header">
       <div class="container-fluid">
           <div class="row mb-2">
               <div class="col-sm-6">
                   <h1 class="m-0">Penilaian Correctness</h1>
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
                   Input Correctness
               </div>
               <div class="card-body">
                   <!-- Pertanyaan Completeness -->
                   <form action="" method="POST">
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">Id_Correctness</label>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="id_correctness"
                                   name="id_correctness" required>
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
                           <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="correctness" id="ganti"
                                   onchange="myfunction(this)">
                                   <option value="">- Pilih -</option>
                                   <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="avg" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti1" onchange="myfunction1(this)">
                                   <option value="">- Pilih -</option>
                                   <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot1" name="bobot1"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg1" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil1()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn1" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Completeness</label>
                           <div class="col-sm-10">
                               <!-- 
                            <input name="cmd_show" type="text" value="true" /> -->
                               <select name="pertanyaan_completeness" class="form-control" name="" name="correctness"
                                   id="ganti2" onchange="myfunction2(this)">
                                   <option value="">- Pilih -</option>
                                   <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Completeness'");
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
                                       <input type="text" class="form-control col-md-3" id="bobot2" name="bobot"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg2" name="avg" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil2()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wncn2" name="wncn" value=""
                                           readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success" onclick="hasil_akhir()">Hasil
                               Completeness</button>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="hasilnya" name="hasilnya" readonly>
                           </div>
                       </div>
                       <hr>
                       <!--    </form> -->


                       <!-- Pertanyaan Consistency -->
                       <!-- <form action="" method="POST"> -->
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">1. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency" onchange="myfunctioncy(this)">
                                   <option value="">- Pilih -</option>
                                   <?php
                                        include '/../../../model/koneksi.php';

                                        $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                                        while($data = mysqli_fetch_array($query)) {
                                            ?>
                                   <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot3" name="bobot3"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency"
                                           name="avg_consistency" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency"
                                           name="wcnc_consistency" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">2. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency1" onchange="myfunctioncy1(this)">
                                   <option value="">- Pilih -</option>
                                   <?php
                                    include '/../../../model/koneksi.php';

                                    $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                                    while($data = mysqli_fetch_array($query)) {
                                        ?>
                                   <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot4" name="bobot4"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency1"
                                           name="avg_consistency1" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency1()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency1"
                                           name="wcnc_consistency1" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">3. Pertanyaan Consistency</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="consistency"
                                   id="consistency2" onchange="myfunctioncy2(this)">
                                   <option value="">- Pilih -</option>
                                   <?php
                                include '/../../../model/koneksi.php';

                                $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Consistency'");

                                while($data = mysqli_fetch_array($query)) {
                                    ?>
                                   <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot5" name="bobot5"
                                           value="" readonly>

                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_consistency2"
                                           name="avg_consistency2" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_consistency2()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency2"
                                           name="wcnc_consistency2" value="" style="width: 200px;" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success"
                               onclick="hasil_akhirconsistency()">Hasil Consistency</button>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="hasilcst" name="hasilcst" value=""
                                   readonly>
                           </div>
                       </div>
                       <!--     </form> -->
                       <hr>
                       <!--  <form action="" method="POST"> -->
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">1. Pertanyaan
                               Treaceability</label>
                           <div class="col-sm-10">
                               <select name="pertanyaan_completeness" class="form-control" name="treacebility"
                                   id="treacebility" onchange="myfunctioncy4(this)">
                                   <option value="">- Pilih -</option>
                                   <?php
                            include '/../../model/koneksi.php';

                            $query = mysqli_query($koneksi, "SELECT * FROM `pertanyaan` WHERE `sub_indikator` = 'Treaceability'");

                            while($data = mysqli_fetch_array($query)) {
                                ?>
                                   <option value="<?php echo $data['bobot_pertanyaan']?>"><?php echo $data['pertanyaan']?></option>
                                   <?php } ?>
                               </select>
                           </div>
                       </div>
                       <div class="container mb-3">
                           <div class="row">
                               <div class="col">
                                   <label for="" class="form-label">Bobot</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="bobot7" name="bobot7"
                                           value="" readonly>
                                   </div>
                               </div>
                               <div class="col">
                                   <label for="" class="form-label">Average</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="avg_treacebility"
                                           name="avg_treacebility" value="">
                                   </div>
                               </div>
                               <div class="col order-1">
                                   <label for="" class="form-label"></label>
                                   <button type="button" class="btn btn-success col-md-3" onclick="hasil_Treceability()"
                                       style="margin-top: 26px;">
                                       Hasil</button>
                               </div>
                               <div class="col order-5">
                                   <label for="" class="form-label">wncn</label>
                                   <div class="">
                                       <input type="text" class="form-control col-md-3" id="wcnc_consistency6"
                                           name="wcnc_consistency6" value="" readonly>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <hr>

                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success"
                               onclick="hasil_akhirTreceability()">Hasil
                               Treaceability</button>
                           <div class="col order-5">
                               <input type="text" class="form-control col-md-1" id="hasiltre" name="hasiltre" value=""
                                   readonly>
                           </div>
                       </div>
                       <hr>
                       <hr>
                       <div class="mb-3 row">
                           <button type="button" class="col-sm-2 col-btn btn-success"
                               onclick="hasil_keseluruhan()">Hasil Akhir</button>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">Nilai Correctness</label>
                           <div class="col-sm-10">
                               <input type="text" class="form-control col-md-1" id="n_corec" name="n_corec" value=""
                                   readonly>
                           </div>
                       </div>
                       <div class="mb-3 row">
                           <label for="" class="col-sm-2 col-form-label">Persentase Correctness</label>
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
if(isset($_POST['save'])) {
    $id_correctness = $_POST['id_correctness'];
    $nilai_completeness = $_POST['hasilnya'];
    $nilai_consistency = $_POST['hasilcst'];
    $nilai_treacebility = $_POST['hasiltre'];
    $nilai_correctness = $_POST['n_corec'];
    $persentase = $_POST['p_corec'];
    $kategori = $_POST['k_corec'];
    $uji = $_POST['uji'];


    // proses insert and validasi

    $cek_data3 = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_hasilakhir = '$uji' AND id_sumber = '$id_correctness' "));
    if ($cek_data3 > 0) {
        $update = $koneksi->query("update correctness set nilai_completeness = '$nilai_completeness',nilai_consistency='$nilai_consistency',nilai_treacebility='$nilai_treacebility',nilai_correctness='$nilai_correctness',persentase='$persentase',kategori='$kategori' where id_correctness = '$id_correctness'");

             if($update){
                echo"<script>alert('Pengeditan Berhasil');
                    window.location='?page=pages/inputform/penilaian/correctness';
                    </script>";
            }else{
                echo"<script>alert('Pengeditan Gagal');</script>";
                   } 
    }

    else{

    $cek_data = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_sumber = '$id_correctness'"));
    if ($cek_data > 0) {
        echo "<script>alert('Id pengujian sudah ada!');</script>";
        echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/correctness'>";
    }else{

        $cek_data2 = mysqli_num_rows($koneksi->query("SELECT * FROM glue WHERE id_hasilakhir = '$uji' AND tipe_sumber = 'correctness' "));
        if ($cek_data2 > 0) {
            echo "<script>alert('Nama uji sudah dipakai ! Silahkan gunakan nama uji yang lain');</script>";
            echo "<meta http-equiv='refresh' content='0;url=?page=pages/inputform/penilaian/correctness'>";
        }

        else{
            $insert = $koneksi->query("INSERT INTO correctness(id_correctness, nilai_completeness, nilai_consistency, nilai_treacebility, nilai_correctness, persentase, kategori) VALUES ('$id_correctness', '$nilai_completeness','$nilai_consistency','$nilai_treacebility','$nilai_correctness','$persentase','$kategori')");
            // $correctness_id = $koneksi->insert_id;
             $insert = $koneksi->query("INSERT INTO glue(id_hasilakhir, id_sumber, tipe_sumber) VALUES ('$uji', '$id_correctness','correctness')");
             if($insert){
                echo"<script>alert('Penambahan Berhasil');
                window.location='?page=pages/inputform/penilaian/correctness';
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
       // Perhitungan Completeness
       function hasil() {
           var bobot = $('#bobot').val();
           var avg = $('#avg').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn").val(hasil);

       }

       function hasil1() {
           var bobot = $('#bobot1').val();
           var avg = $('#avg1').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn1").val(hasil);
       }

       function hasil2() {
           var bobot = $('#bobot2').val();
           var avg = $('#avg2').val();
           var hasil = (bobot * avg).toFixed(2);
           $("#wncn2").val(hasil);
       }

       function hasil_akhir() {
           var hasil1 = $('#wncn').val();
           var hasil2 = $('#wncn1').val();
           var hasil3 = $('#wncn2').val();
           var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3);
           $('#hasilnya').val(ketemu.toFixed(2));

       }

       // Perhitungan consistency
       function hasil_consistency() {
           var bobot1 = $('#bobot3').val();
           var avgc = $('#avg_consistency').val();
           var hasil1 = (bobot1 * avgc).toFixed(2);
           $('#wcnc_consistency').val(hasil1);
       }

       function hasil_consistency1() {
           var bobot2 = $('#bobot4').val();
           var avg = $('#avg_consistency1').val();
           var hasil = (bobot2 * avg).toFixed(2);
           $("#wcnc_consistency1").val(hasil);
       }

       function hasil_consistency2() {
           var bobot3 = $('#bobot5').val();
           var avg = $('#avg_consistency2').val();
           var hasil = (bobot3 * avg).toFixed(2);
           $("#wcnc_consistency2").val(hasil);
       }


       function hasil_akhirconsistency() {
           var hasil1 = $('#wcnc_consistency').val();
           var hasil2 = $('#wcnc_consistency1').val();
           var hasil3 = $('#wcnc_consistency2').val();
           var ketemu = Number(hasil1) + Number(hasil2) + Number(hasil3);
           $('#hasilcst').val(ketemu.toFixed(2));

       }


       // perhitungan Treceability

       function hasil_Treceability() {
           var bobot6 = $('#bobot7').val();
           var avg = $('#avg_treacebility').val();
           var hasil = (bobot6 * avg).toFixed(2);
           $("#wcnc_consistency6").val(hasil);
       }

       function hasil_akhirTreceability() {
           var hasil1 = $('#wcnc_consistency6').val();
           var ketemu = Number(hasil1) * 1;
           $('#hasiltre').val(ketemu.toFixed(2));

       }


       // total Keseluruhan
       function hasil_keseluruhan() {
           // nilai corectnes
           var total1 = $('#hasilnya').val();
           var total2 = $('#hasilcst').val();
           var total3 = $('#hasiltre').val();
           console.log(total1);
           console.log(total2);
           console.log(total3);
           var ketemu = ((Number(total1) + Number(total2) + Number(total3)) / 3);
           console.log(ketemu);
           $("#n_corec").val(ketemu.toFixed(2));

           // persentase corectness
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



       // tampil Completeness
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

       // tampil consistency
       function myfunctioncy(selectElement) {
            
            var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot3");
            inputElement.value = selectedValue;
       }

       function myfunctioncy1(selectElement) {

           var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot4");
            inputElement.value = selectedValue;
       }

       function myfunctioncy2(selectElement) {

           var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot5");
            inputElement.value = selectedValue;
       }


       // tampil treacebility

       function myfunctioncy4(selectElement) {
        
            var selectedValue = selectElement.value;
            var inputElement = document.getElementById("bobot7");
            inputElement.value = selectedValue;
       }
       </script>

   </body>

   </html>