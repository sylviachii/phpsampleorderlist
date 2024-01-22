<?php
/**
 * 表單接收頁面
 */
// 網頁編碼宣告（防止產生亂碼）
header('content-type:text/html;charset=utf-8');
?>

<?php
require_once('conn/conn.php');

$client = $_POST['client'];
$titlename = $_POST['titlename'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$name1 = $_POST['name1'];
$price1 = $_POST['price1'];
$qu1 = $_POST['qu1'];
$name2 = $_POST['name2'];
$price2 = $_POST['price2'];
$qu2 = $_POST['qu2'];
$name3 = $_POST['name3'];
$price3 = $_POST['price3'];
$qu3 = $_POST['qu3'];
$name4 = $_POST['name4'];
$price4 = $_POST['price4'];
$qu4 = $_POST['qu4'];
$name5 = $_POST['name5'];
$price5 = $_POST['price5'];
$qu5 = $_POST['qu5'];
$subtotal= $_POST['subtotal'];
$total= $_POST['total'];
$shipping= $_POST['shipping'];
$discount= $_POST['discount'];
$delivery= $_POST['delivery'];
if (empty($titlename)) {
  die('請檢查資料');
}



$sql = "INSERT INTO chiweiorder(titlename, quantity,client,price,name1,name2,name3,name4,name5,price1,price2,price3,price4,price5,qu1,qu2,qu3,qu4,qu5,subtotal,total,shipping,discount,delivery) 
  VALUES('$titlename','$quantity','$client','$price','$name1','$name2','$name3','$name4','$name5','$price1','$price2','$price3','$price4','$price5','$qu1','$qu2','$qu3','$qu4','$qu5','$subtotal','$total','$shipping','$discount','$delivery')";

  
$result =$link->query($sql); // 會回傳 true or false，就可以用來判斷有無成功。



  


if ($result) {
  header('Location: ./index.php'); 
  // 這裡的用意是給一個 header，告訴瀏覽去要去的位置，就會轉跳過去。
} else {
  echo 'failed, ' . $conn->error ; // 顯示錯誤並印出錯誤訊息。
}



?>

