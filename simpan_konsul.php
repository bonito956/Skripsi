<?php
    include "koneksi.php";
    include "create_message.php";
    $sql = "INSERT INTO konsultasi (nama_konsulti, email_konsulti, subjek_konsul, isi_konsul)
    VALUES ('".$_POST['nama_konsulti']."', '".$_POST['email_konsulti']."', '".$_POST['subjek_konsul']."', '".$_POST['isi_konsul']."')";
    if ($conn->query($sql) === TRUE) {
        create_message("Konsultasi Berhasil Terkirim","success","check");
        $conn->close();
        header("location:menu_konsultasi.php");
        exit();
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $conn->close();
        exit();
    }
?>