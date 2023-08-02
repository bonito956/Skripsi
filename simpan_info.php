<?php
    include "koneksi.php";

    $fileName = $_FILES['foto']['name'];
    $sql = "INSERT INTO info (nama_burung, habitat_burung, deskripsi, foto)
    VALUES ('".$_POST['nama_burung']."', '".$_POST['habitat_burung']."', '".$_POST['deskripsi']."','$fileName')";
    move_uploaded_file($_FILES['foto']['tmp_name'], "assets/uploads/burung/".$_FILES['foto']['name']);
    if ($conn->query($sql) === TRUE) {
        $conn->close(); 
        header("location:dashboard_info.php");
        exit();
    } else {
        $conn->close();
        header("location:dashboard_info.php");
        exit();
    }
?>