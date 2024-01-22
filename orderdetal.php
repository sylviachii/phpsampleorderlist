<!doctype html>
<html lang="en">

<?php include("header.php"); ?>
<main class="content">
<?php include("headermenu.php"); ?>
    <?php include("menu.php"); ?>
    <div style='margin:0 20px;'>
        <?php 
    require_once('conn/conn.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM chiweiorder WHERE idorder = ".$id;
    $result = mysqli_query($link,$sql); // 執行SQL查詢
    $row = $result->fetch_assoc();
    $idorder = $row['idorder'];
    $client = $row['client'];
    $title = $row['titlename'];
    $quantity = $row['quantity'];
    $price = $row['price'];
    $imgsrc=$row['imgsrc']; 
    $name1 = $row['name1'];  
    $price1 = $row['price1']; 
    $qu1 = $row['qu1']; 
    $imgsrc1=$row['imgsrc1']; 
    $name2 = $row['name2'];  
    $price2 = $row['price2']; 
    $qu2 = $row['qu2'];
    $imgsrc2=$row['imgsrc2'];
    $name3 = $row['name3'];  
    $price3 = $row['price3']; 
    $qu3 = $row['qu3']; 
    $imgsrc3=$row['imgsrc3']; 
    $name4 = $row['name4'];  
    $price4 = $row['price4']; 
    $qu4 = $row['qu4']; 
    $imgsrc4=$row['imgsrc4'];  
    $name5 = $row['name5'];  
    $price5 = $row['price5']; 
    $qu5 = $row['qu5']; 
    $imgsrc5=$row['imgsrc5']; 
    $name5 = $row['name6'];  
    $price5 = $row['price6']; 
    $qu6 = $row['qu6'];
    $imgsrc6=$row['imgsrc6']; 
    $name7 = $row['name7'];  
    $price7 = $row['price7']; 
    $qu7 = $row['qu7']; 
    $imgsrc7=$row['imgsrc7'];
    $name8 = $row['name8'];  
    $price8 = $row['price8']; 
    $qu8 = $row['qu8'];
    $imgsrc8=$row['imgsrc8']; 
    $name9 = $row['name9'];  
    $price9 = $row['price9']; 
    $qu9 = $row['qu9'];
    $imgsrc9=$row['imgsrc9'];
    $subtotal= $row['subtotal'];
    $shipping= $row['shipping'];
    $total= $row['total'];
    $discount= $row['discount'];
    $delivery= $row['delivery'];
    $address = $row['address'];
    $tel = $row['tel'];
    $note = $row['note'];
    $state = $row['state'];
    $date=$row['date']; 
    
    if ($name2== 0) {
        $shipping = '免運費';
    }
$sql = "SELECT * FROM chiweiorder WHERE idorder = ".$id; //在test資料表中選擇所有欄位
$result = mysqli_query($link,$sql); // 執行SQL查詢


// 检查查询结果
if ($result->num_rows > 0) {
    // 输出数据
    echo " <div class='spacebetween mt-4'><h5>訂單詳情</h5></div>";
    while ($row = $result->fetch_assoc()) {
    echo " <div class='list'>";
    echo " <div class='listtop'>";
        echo " <h5> 訂單#". $row['idorder'] ."<a href='upedit.php?id=".$row['idorder'] ."'><img style='width: 24px;' src='edit.png'></a></h5>";
        echo "<div class=''><div class='state'><h5>".$row['state'] ."</h5></div></div>";
        echo "</div>";
    echo "<div class='line'></div>";
    echo "<div class='div-6'>";
        echo "<div class='listtitle'>購買人</div>";
        echo "<div class='listtitle'>配送方式</div>";
    echo "</div>";
    echo "<div class='div-6'>";
        echo "<div class='listtitlenames'>".$row['client']."</div>";
        echo "<div class='listtitlenames'>".$row['delivery']."</div>";
        echo "</div>";
    echo "</div>"; 
     // 品項1
        echo "<div class='list'>";
        echo "<div style='margin-bottom:20px;'>";
            echo "<div class='spacebetween'>";
                echo "<div><img width='64' src='". $row['imgsrc'.$i] ."'></div>";
                echo "<div class='prodectname'>". $row['titlename'.$i] ."";
                    echo "<div class='ordercount'>";
                        echo "<div class='ordercountlist'>$" . $row['price'.$i] . "</div>";
                        echo "<div class='ordercountlist '>數量：" . $row['quantity'.$i] . "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";

    for ($i = 1; $i <= 10; $i++) {
        
            if (empty($row['name' . $i])) {
            // 如果 $row['qu'.$i] 為空，跳過該次迴圈
            continue;
        }

            echo "<div style='margin-bottom:20px;'>";
                echo "<div class='spacebetween'>";
                    echo "<div><img width='64' src='". $row['imgsrc'.$i] ."'></div>";
                    echo "<div class='prodectname'>". $row['name'.$i] ."";
                        echo "<div class='ordercount'>";
                            echo "<div class='ordercountlist'>$" . $row['price'.$i] . "</div>";
                            echo "<div class='ordercountlist'>數量：" . $row['qu'.$i] . "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
                
            echo "</div>";
       
    }
       echo "</div>";
    // 配送資訊
    echo " <div class='list quantity'>";
    echo " <div class='spacebetween'><h4>配送資訊</h4></div>";
    echo " <div class='line'></div>";
    echo " <div class='spacebetween'>";
    echo " <div class='listtitle d-flex align-items-center'>購買人</div>";
    echo " <div class='listleft listtitlenames'>".$row['client']."</div>";
    echo " </div>";
    echo " <div class='spacebetween'>";
    echo " <div class='listtitle d-flex align-items-center'>運費</div>";
    echo " <div class='listleft listtitlenames'>".$row['shipping']."</div>";
    echo " </div>";
    echo " <div class='spacebetween'>";
    echo " <div class='listtitle d-flex align-items-center'>配送</div>";
    echo " <div class='listleft listtitlenames'>".$row['delivery']."</div>";
    echo " </div>";
    echo " <div class='spacebetween'>";
    echo " <div class='listtitle d-flex align-items-center'>聯絡電話</div>";
    echo " <div class='listleft listtitlenames'>".$row['tel']."</div>";
    echo " </div>";
    echo " <div class='spacebetween mb-2'>";
    echo " <div class='listtitle d-flex align-items-center'>地址</div>";
    echo " <div class=''>".$row['address']."</div>";
    echo " </div>";
    echo " <div class='spacebetween'>";
    echo " <div class='listtitle d-flex align-items-center mb-2'>備註</div>";
    echo " <div class='note'>".$row['note']."</div>";
    echo " </div>";
    echo " </div>";           
    // 可以根据表的字段数量和名称扩展输出
    }
} 
    else {
      echo "0 results";
    }

?>
    </div>
    <?php include("footer.php"); ?>
</main>

</body>

</html>