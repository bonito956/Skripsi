<?php
    include "koneksi.php";
    include "create_message.php";
    $sql = "DELETE from konsultasi where id_konsul=".$_GET['id_konsul'];
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        header("location:dashboard_konsul.php");
        exit();
    } else {
        $conn->close();
        header("location:dashboard_konsul.php");
        exit();
    }
?>