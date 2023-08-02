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
                    <li class="nav-item">
                        <a class="nav-link" href="menu_konsultasi.php">Konsultasi</a>
                    </li>
                    <!-- Menu 4 END -->

                    <!-- Menu 5 -->
                    <li class="nav-item active">
                        <a class="nav-link" href="menu_about_us.php">About Us</a>
                    </li>
                    <!-- Menu 5 END -->

                </ul>
 
            </div>
            <!-- Navbar Menu END -->
        </nav>
        
        <!-- Jumbotron -->
        <section class="jumbotron" style=" color: white; background-color: #234A38; margin-bottom: 0;">
            <div class="container" >
                <div class="row">
                    
                    <div class="col" style="margin-top: 30px;">
                        <h1><b>Website Informasi Seputar Burung!</b></h1>
                        <hr class="my-4">
                        <p class="lead">
                            <button type="button" class="btn" style=" color: black;  background-color: #F2F2F2;" id="myBtn" data-toggle="modal" data-target="#modalProfil"><b>Profil</b></button>
                        </p>
                    </div>
                    
                    <div class="col">
                        <img src="assets/img/logo.png" alt="Jumbotron" style="float: right; margin-top: 80px; margin-left: 20px;">
                    </div>
                </div>
            </div>
        </section>
        <!-- Jumbotron END -->
        
        <section class="bg-light-blue pt-2 pb-2" style="background-color: black;margin-bottom: 0;">
        <div class="card-group" style="background-color: black;">
                <div class="card">
                    <img src="assets/img/about_pic_1.jpg" alt="pic1">
                </div>
                <div class="card">
                    <img src="assets/img/about_pic_2.jpg" alt="pic2">
                </div>
                <div class="card">
                    <img src="assets/img/about_pic_3.jpg" alt="pic3">
                </div>
                <div class="card">
                    <img src="assets/img/about_pic_4.jpg" alt="pic4">
                </div>
            </div>
        </section>

        <!-- Modal Profil -->
        <div class="modal fade" id="modalProfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="padding:35px 50px;">
                        <h4 class="modal-title w-100 font-weight-bold">Profil</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center" style="padding:40px 50px;">
                        <form role="form">
                            <pre>Bonito Dian Putra Kareimbala</pre>
                            <pre>18102261</pre>
                        </form>     
                    </div>
                </div>
            </div>
        </div>
        <!-- END Modal Profil -->

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