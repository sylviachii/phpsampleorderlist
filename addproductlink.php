<?php
/**
 * 表單接收頁面
 */
// 網頁編碼宣告（防止產生亂碼）
header('content-type:text/html;charset=utf-8');
?>

<?php
require_once('conn/conn.php');
$titlename = $_POST['titlename'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$buyprice = $_POST['buyprice'];
$note = $_POST['note'];


if (empty($titlename)) {
  die('請檢查資料');
}



$sql = "INSERT INTO chiweiproduct(titlename,quantity,price,buyprice,note) 
  VALUES('$titlename','$quantity','$price','$buyprice','$note')";

  
$result =$link->query($sql); // 會回傳 true or false，就可以用來判斷有無成功。



  


if ($result) {
  header('Location: ./detal.php'); 
  // 這裡的用意是給一個 header，告訴瀏覽去要去的位置，就會轉跳過去。
} else {
  echo 'failed, ' . $conn->error ; // 顯示錯誤並印出錯誤訊息。
}



?>

