<?php
  include "../Connection/connect.php";

  if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sqls = "SELECT * FROM book WHERE id = '$id'";
    $result = $connect -> query($sqls);
    $row = $result->fetch_assoc();

    $sql = "DELETE FROM book WHERE id = '$id'";
    unlink("../Create/".$row['image']);

    $connect -> query($sql);
  }

  header("location: ../book.php");
  exit;
?>