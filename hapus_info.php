<?php
    include "koneksi.php";
    include "create_message.php";
    $sql = "DELETE from info where id_info =".$_GET['id_info'];
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