<?php
require_once('conn/conn4.php');

    $titlename = $_POST['titlename'];
    $quantity =  $_POST['quantity'];
    $price =  $_POST['price'];
    $img =  $_POST['img'];
    $buyprice=  $_POST['buyprice'];
     $note=  $_POST['note'];

$id = $_POST['productid'];
$sql = "UPDATE chiweiproduct SET titlename='$titlename',quantity='$quantity',price='$price' ,img='$img',buyprice='$buyprice',note='$note' WHERE productid = " . $id;

$result =$link->query($sql); // 會回傳 true or false，就可以用來判斷有無成功。

if ($result) {
  header('Location: /orderlist/detal.php'); 
  // 這裡的用意是給一個 header，告訴瀏覽去要去的位置，就會轉跳過去。
} else {
  echo 'failed, ' . $link->error ; // 顯示錯誤並印出錯誤訊息。
}


?>

