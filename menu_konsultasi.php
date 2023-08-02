<?php
    include "koneksi.php";
    session_start();
    $qkonsultasi = "select * from konsultasi";
    $data_konsultasi = $conn->query($qkonsultasi);
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- My CSS -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Font Awesome JS -->
        <script src="https://kit.fontawesome.com/8fe9d239e9.js" crossorigin="anonymous"></script>

        <title>BIRDPEDIA</title>
        <link rel="shortcut icon" href="assets/img/favicon.ico">
    </head>
    
    <body>
        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark box-shadow shadow" style="background-color: #005605;">
            <!-- Navbar Title -->
            <a class="navbar-brand" href="index.php" style="font-family: 'Franklin Gothic Medium';">
                <img src="assets/img/logo.png" style="width: 136px; height: 27px" alt="logo">
            </a>
            <!-- Navbar Title END -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto" style="font-family: 'Franklin Gothic Medium';">
                                    <!-- Menu 1 -->
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
                </li>
                    <!-- Menu 1 END -->

                    <!-- Menu 2 -->
                    <li class="nav-item ">
                        <a class="nav-link" href="menu_info.php">Informasi Burung<span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Menu 2 END -->

                    <!-- Menu 3 -->
                    <li class="nav-item">
                        <a class="nav-link" href="menu_tips.php">Tips</a>
                    </li>
                    <!-- Menu 3 END -->

                    <!-- Menu 4 -->
                    <li class="nav-item active">
                        <a class="nav-link" href="menu_konsultasi.php">Konsultasi</a>
                    </li>
                    <!-- Menu 4 END -->

                    <!-- Menu 5 -->
                    <li class="nav-item">
                        <a class="nav-link" href="menu_about_us.php">About Us</a>
                    </li>
                    <!-- Menu 5 END -->

                </ul>
 
            </div>
            <!-- Navbar Menu END -->
        </nav>
        
        <!-- Navbar END -->
        
        <div class="container mt-4" >
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow shadow">
                        <div class="card-body py-3">
                            <h5  style="font-family: 'Franklin Gothic Medium';">Hubungi Kami</h5>
                            <hr>
                            <p style="margin: 0; padding: 0; font-family: 'Franklin Gothic Medium';"><b> Email :</b></p>
                            <p style="margin: 0; padding: 0;">18102261@ittelkom-pwt.ac.id</p>
                            <p style="margin: 0; margin-top: 20px; padding: 0; font-family: 'Franklin Gothic Medium';"><b> Phone :</b></p>
                            <p style="margin: 0; padding: 0;">+62-813-1142-9711</p>
                            <p style="margin: 0; margin-top: 20px; padding: 0; font-family: 'Franklin Gothic Medium';"><b> Address :</b></p>
                            <p style="margin: 0; padding: 0;">Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kec.Purwokerto Selatan, Kabupaten Banyumas, Jawa Tengah 53147</p>
                        </div>
                        <div class="card-footer pt-0 border-top-0">
                            <h6 style="font-family: 'Franklin Gothic Medium'; margin: 0; padding: 0; margin-top: 10px;">Find Us on Social Media</h6>
                            <hr style="padding: 0; margin: 0;">
                            <ul class="list-unstyled list-inline text-md-left" style="margin-top: 10px; margin-bottom: 0px;">
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-xl rgba-white-slight mx-1 fa-2x" href="https://gitlab.com/" target="_blank" style="color: tomato;">
                                        <i class="fab fa-gitlab"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-xl rgba-white-slight mx-1 fa-2x" href="https://www.linkedin.com" target="_blank" style="color: #0e76a8;">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-xl rgba-white-slight mx-1 fa-2x" href="https://www.instagram.com/" target="_blank" style="color: #8a3ab9;">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 style="text-align: center; font-family: 'Franklin Gothic Medium';"><b>Konsultasikan Masalah!</b></h3>
                    <hr>
                    <?php include "read_message.php" ?>
                    </div> 
                    <form class="mb-5" action ="simpan_konsul.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="name" class="col-form-label">Name</label>
                                <input type="text" class="form-control" id="nama_konsulti" name="nama_konsulti" required placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="email" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="email_konsulti" name="email_konsulti" required placeholder="Masukkan Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="subject" class="col-form-label">Subject</label>
                                <input type="text" class="form-control" id="subjek_konsul" name="subjek_konsul" required placeholder="Masukkan Subject">
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="message" class="col-form-label">Pesan</label>
                                <textarea class="form-control" id="isi_konsul" name="isi_konsul" required cols="30" rows="3" placeholder="Masukkan Pesan"></textarea>
                            </div>
                            <div class="col-md-12 text-md-center">
                                <input type="submit" value="Kirim" class="btn rounded-0 py-2 px-4" style="background-color: #005605; color: white;">
                                <span class="submitting"></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </div>
        


        <div class="container">
            <h3 style="text-align: center; font-family: 'Franklin Gothic Medium';"><b>Riwayat Konsultasi</b></h3>
            <div class="row">
                <div class="col-md-12 order-md-12 mb-4">
                <div class="content">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- ./card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead style="background-color: #1A1A1C; color: #FFFFFF">
                                            <tr>
                                                <th>Nama</th>
                                                <th>Subyek</th>
                                                <th>Pesan</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            foreach($data_konsultasi as $index => $value){
                                        ?>
                                        <tbody>
                                            <tr data-widget="expandable-table" aria-expanded="false">
                                                <td><?php echo $value['nama_konsulti'] ?></td>
                                                <td><?php echo $value['subjek_konsul'] ?></td>
                                                <td colspan="5">
                                                    <p>
                                                        <?php echo $value['isi_konsul'] ?>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
                                            }
                                        ?>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="page-footer font-small mdb-color pt-4" style="background-color: #0B0D17;">
            <!-- Footer Links -->
            <div class="container text-center text-md-left">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8">
                        <!--Copyright-->
                        <p class="text-center text-md-left" style="color: white;">© BIRDPEDIA - 18102261
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0">
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a href="https://ittelkom-pwt.ac.id/">
                                        <img src="assets/img/logoittp.png" style="width: 50px; height: 50px" alt="logo">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
            <!-- Footer Links -->
        </footer>
        <!-- Footer -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
             
    </body>

</html>