<?php
    require_once('conn/conn4.php');
    $sql = "SELECT * FROM chiweiproduct WHERE productid = ".$id;
    $titlename = $row['titlename'];
    $qu = $row['qu'];
    $price = $row['price'];
    $id = $_POST['productid'];
    
    $sql = "UPDATE chiweiproduct SET titlename='$titlename' WHERE productid = ".$id;
    $result =$link->query($sql); // 會回傳 true or false，就可以用來判斷有無成功。

    if ($result) {
        // 這裡的用意是給一個 header，告訴瀏覽去要去的位置，就會轉跳過去。
        header('Location: ./detal.php'); 
    } 
    else {
        echo 'failed, ' . $link->error ; // 顯示錯誤並印出錯誤訊息。
    }
?>