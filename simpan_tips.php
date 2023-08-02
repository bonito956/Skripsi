<?php
    include "koneksi.php";

    $fileName = $_FILES['foto']['name'];
    $sql = "INSERT INTO tips (judul_tips, tanggal_tips, isi_tips, foto)
    VALUES ('".$_POST['judul_tips']."', '".$_POST['tanggal_tips']."', '".$_POST['isi_tips']."', '$fileName')";
    move_uploaded_file($_FILES['foto']['tmp_name'], "assets/uploads/tips/".$_FILES['foto']['name']);
    if ($conn->query($sql) === TRUE) {
        $conn->close(); 
        header("location:dashboard_tips.php");
        exit();
    } else {
        $conn->close();
        header("location:dashboard_tips.php");
        exit();
    }
?>