<?php
    include "koneksi.php";
    include "create_message.php";
    $sql = "DELETE from tips where id_tips =".$_GET['id_tips'];
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