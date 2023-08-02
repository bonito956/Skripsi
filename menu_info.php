<?php
    include "koneksi.php";
    session_start();
    $qinfo = "select * from info";
    $data_info = $conn->query($qinfo);
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/8fe9d239e9.js" crossorigin="anonymous"></script>

    <!-- Icon Awesome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        /* Make the image fully responsive */
        .carousel-item,
        .carousel-inner,
        .carousel-inner img {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .carousel-item {
            text-align: center;
        }

        .carousel {
            height: 300px;
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            background-color: #1A1A1C;
            border-radius: 50%;
        }
    </style>

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
                <li class="nav-item active">
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
                <li class="nav-item">
                    <a class="nav-link" href="menu_about_us.php">About Us</a>
                </li>
                <!-- Menu 5 END -->
            </ul>
        </div>
        <!-- Navbar Menu END -->
    </nav>
    <!-- Navbar END -->

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="background-color: #2B2B2B; font-family: 'Franklin Gothic Medium';">
            <li><a href="index.php"><i class="fas fa-home mr-3" style="color: #BFD5C0;"></i></a><i class="fas  fa-angle-right mr-3" style="color: white;"></i></li>
            <li class="breadcrumb-item"  aria-current="page"><a href="menu_info.php" style="color: white">Info</a></li>
        </ol>
    </nav>
    <!-- Breadcrumb -->

    <main role="main" class="container my-3">

        <div class="artikel-terbaru mt-5">
            <h2 class="mb-3" style="text-align: center;">Informasi Burung</h2>
            <div class="row">
                <?php
                    $queri = "select * from info";
                    $hasil= mysqli_query ($conn, $queri);
                    $id = 0;
                    while($data = mysqli_fetch_array($hasil)){
                        $id++;
                ?>
                <div class="col-md-4 quote-item" id="quote-item">
                    <div class="card mb-4 box-shadow text-dark text-justify  " style="text-decoration: none;">
                        <img class="card-img-top" src="assets/uploads/burung/<?php echo $data['foto']; ?>" style=" width: 100%; height: 15vw; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data['nama_burung'] ?></h5>
                            <a href=<?php echo "\"detail_info.php?id=".$data[0]."\"" ?> class="stretched-link"></a>
                        </div>

                    </div>
                </div>
                <?php
                    }
                ?>

            </div>
        </div>


    </main>

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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous">
    </script>

</body>

</html>