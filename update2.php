<?php
require_once('conn/conn.php');

$titlename = $_POST['titlename'];
  $quantity =  $_POST['quantity'];
  $price =  $_POST['price'];
   $client =  $_POST['client'];
   $name1 =  $_POST['name1'];  
   $price1 =  $_POST['price1']; 
   $qu1 =  $_POST['qu1'];  
   $name2 =  $_POST['name2'];  
   $price2 =  $_POST['price2']; 
   $qu2 =  $_POST['qu2'];
   $name3 =  $_POST['name3'];  
   $price3 =  $_POST['price3']; 
   $qu3 =  $_POST['qu3'];  
   $name4 = $_POST['name4'];  
   $price4 =  $_POST['price4']; 
   $qu4 =  $_POST['qu4']; 
   $name5 =  $_POST['name5'];  
   $price5 =  $_POST['price5']; 
   $qu5 =  $_POST['qu5']; 
    $subtotal=  $_POST['subtotal'];
    $shipping= $_POST['shipping'];
    $total=  $_POST['total'];
    $discount= $_POST['discount'];
    $delivery=  $_POST['delivery']; 
    $address=  $_POST['address']; 
    $tel=  $_POST['tel'];
    $note=  $_POST['note'];
    $state= $_POST['state'];
    $imgsrc= $_POST['imgsrc'];
    $imgsrc1= $_POST['imgsrc1'];
    $imgsrc2= $_POST['imgsrc2'];


$id = $_POST['idorder'];
$sql = "UPDATE chiweiorder SET titlename='$titlename',quantity='$quantity',price='$price',client='$client',subtotal='$subtotal',state= '$state',imgsrc= '$imgsrc',imgsrc1= '$imgsrc1',imgsrc2= '$imgsrc2',
shipping='$shipping',
total='$total',
discount='$discount',
delivery='$delivery',
address='$address',
tel='$tel',
note='$note',
name1='$name1',
name2='$name2',
name3='$name3',
name4='$name4',
name5='$name5',
name6='$name6',
name7='$name7',
name8='$name8',
name9='$name9',
price1='$price1',
price2='$price2',
price3='$price3',
price4='$price4',
price5='$price5',
price6='$price6',
price7='$price7',
price8='$price8',
price9='$price9',
qu1='$qu1',
qu2='$qu2',
qu3='$qu3',
qu4='$qu4',
qu5='$qu5',
qu6='$qu6',
qu7='$qu7',
qu8='$qu8',
qu9='$qu9' WHERE state = state like '待處理'";

$result =$link->query($sql); // 會回傳 true or false，就可以用來判斷有無成功。

if ($result) {
  header('Location: ./index.php'); 
  // 這裡的用意是給一個 header，告訴瀏覽去要去的位置，就會轉跳過去。
} else {
  echo 'failed, ' . $link->error ; // 顯示錯誤並印出錯誤訊息。
}


?>

