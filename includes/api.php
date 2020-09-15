<?php
  include_once("./connect.php");
  $name = $_POST['name'];
  $date = $_POST['date'];;
  $value = $_POST['value'];;
  $desc = $_POST['desc'];;
  $sql = "INSERT INTO `invoices` (`date`, `name`, `value`, `desc`) 
  VALUES ('".$date."', '".$name."', '".$value."', '".$desc."');";
  $result = mysqli_query($conn, $sql);
  if (!$result){
    die("Query Failed ".mysqli_error($connection));
  }
  echo "{".$name. " is added to database}";
  $conn->close();
?>