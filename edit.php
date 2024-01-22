<!doctype html>
<html lang="en">
  <?php include("header.php"); ?>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<button id="myBtns"><a href="#section1">down</a></button>


<script>
//Get the button
var mybutton = document.getElementById("myBtn");
var mybuttons = document.getElementById("myBtns");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybuttons.style.display = "block";
    mybutton.style.display = "block";
  } else {
    mybuttons.style.display = "none";
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<?php

require_once('conn/conn.php'); 
$data_nums = mysqli_num_rows($result); //統計總比數
    $per = 5; //每頁顯示項目數量
    $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
    if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
        $page=1; //則在此設定起始頁數
    } else {
        $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
    }
    $start = ($page-1)*$per; //每一頁開始的資料序號
$result = mysqli_query($link,"select * from chiweiorder ORDER BY idorder DESC limit {$start}, {$per}");

?>

<div class="pt-4 mt-4"><h5>編輯訂單</h5></div>
      <?php
//輸出資料內容
$sql="SELECT * FROM chiweiorder ORDER BY idorder DESC";
while ($row = mysqli_fetch_array ($result))
{
    $title = $row['titlename'];
    $quantity = $row['quantity'];
    $price = $row['price'];
    $idorder = $row['idorder'];
    $client = $row['client'];
    $name1 = $row['name1'];  
    $price1 = $row['price1']; 
    $qu1 = $row['qu1'];  
    $name2 = $row['name2'];  
    $price2 = $row['price2']; 
    $qu2 = $row['qu2'];
    $name3 = $row['name3'];  
    $price3 = $row['price3']; 
    $qu3 = $row['qu3'];  
    $name4 = $row['name4'];  
    $price4 = $row['price4']; 
    $qu4 = $row['qu4']; 
    $name5 = $row['name5'];  
    $price5 = $row['price5']; 
    $qu5 = $row['qu5']; 
        $name5 = $row['name6'];  
    $price5 = $row['price6']; 
    $qu5 = $row['qu6']; 
        $name5 = $row['name7'];  
    $price5 = $row['price7']; 
    $qu5 = $row['qu7']; 
        $name5 = $row['name8'];  
    $price5 = $row['price8']; 
    $qu5 = $row['qu8']; 
    $name5 = $row['name9'];  
    $price5 = $row['price9']; 
    $qu5 = $row['qu9']; 
    
    $subtotal= $row['subtotal'];
    $shipping= $row['shipping'];
    $total= $row['total'];
    $discount= $row['discount'];
    $delivery= $row['delivery'];
    $address = $row['address'];
    $date=$row['date']; 
    $state= $_POST['state'];
    ?>


<main class="container">  

  <div class="row mt-4">
    <div class="col-lg-6">
      <p class="pb-2 mb-2 mt-2 ml-2">訂單#<?php echo $idorder; ?></p>
      </div>
      <div class="col-lg-6 text-right"><a href='upedit.php?id=<? echo $row[idorder];?>' class="">編輯訂單#<? echo $row[idorder];?></a></div>
      </div>
      <hr>
      
          <div class="listall">
        <div class="row pl-2">
          <div class="col-lg-6 col-6"><h5 class="blog-post-title">購買人</h5></div>
          <div class="col-lg-6 col-6 text-right"><h5 class="mr-2"><?php echo $client; ?></h5></div>
        </div>
        <div class="listfont mt-2 pl-2">品項</div>
        <hr style="margin-top: 0.3rem; margin-bottom: 1rem;">
        <div class="pl-2">
          <div class="row listfont mb-2">
            <div class="col-lg-5 col-5 ">品名</div>
            <div class="col-lg-3 col-3 mr-4">數量</div>
            <div class="col-lg-2 col-2  mr-4 text-right">單價</div>
          </div> 
          <div class="row  mb-3">
            <div class="col-lg-5 col-5"><?php echo $title; ?></div>
            <div class="col-lg-3 col-3 mr-4"><?php echo $quantity; ?></div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $price; ?></div>          
          </div>
            <div class="row  mb-3">
            <div class="col-lg-5 col-5"><?php echo $name1; ?></div>
            <div class="col-lg-3 col-3 mr-4"><?php echo $qu1; ?></div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $price1; ?></div>          
          </div>
          <div class="row  mb-3">
            <div class="col-lg-5 col-5"><?php echo $name2; ?></div>
            <div class="col-lg-3 col-3 mr-4"><?php echo $qu2; ?></div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $price2; ?></div>          
          </div>
          <div class="row  mb-3">
            <div class="col-lg-5 col-5"><?php echo $name3; ?></div>
            <div class="col-lg-3 col-3 mr-4"><?php echo $qu3; ?></div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $price3; ?></div>          
          </div>
          <div class="row  mb-3">
            <div class="col-lg-5 col-5"><?php echo $name4; ?></div>
            <div class="col-lg-3 col-3 mr-4"><?php echo $qu4; ?></div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $price4; ?></div>          
          </div>
                    <div class="row  mb-3">
            <div class="col-lg-5 col-5"><?php echo $name5; ?></div>
            <div class="col-lg-3 col-3 mr-4"><?php echo $qu5; ?></div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $price5; ?></div>          
          </div>
          <hr>
          <div class="row mb-2">
            <div class="col-lg-9 col-9">小計</div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $subtotal; ?></div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-9 col-9">小資優惠</div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $discount; ?></div>
          </div>
          <div class="row mb-2">
            <div class="col-lg-9 col-9">狀態</div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $state; ?></div>
          </div>          
          <div class="row mb-2">
            <div class="col-lg-9 col-9">運費</div>
            <div class="col-lg-2 col-2 mr-4 text-right"><?php echo $shipping; ?></div>
          </div>
          <hr>
    <div class="row  mt-1 listfont text-center mb-2">
      <div class="col-lg-4 col-4">配送方式</div>
      <div class="col-lg-4 col-4 pr-5">總計金額</div>
      <div class="col-lg-4 col-4">配送地址</div>
    </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-4 col-4 shipbgcolor text-center  p-2"><?php echo $delivery; ?></div>
      <div class="col-lg-4 col-4 bgcolor text-center p-2 paylist"><?php echo $total; ?></div>
      <div class="col-lg-4 col-4 bgcolor text-center p-2 paylist"><?php echo $address; ?></div>
    </div>
        <hr><hr>
    </div>
  </div><!-- /.row -->

</div>                            
</main>    <?php
    }
?>
<!-- /.container --> 
</div>
<?php


$sqls = "SELECT * FROM chiweiproduct"; //在test資料表中選擇所有欄位
$resultss = mysqli_query($link,$sqls); // 執行SQL查詢
?><select name="papermenu" id="papermenu">
<?php
 while ($row = mysqli_fetch_array ($resultss)){
    $title11 = $row['titlename'];
?>

      <option value="<?php echo $title11;?>"><?php echo $title11;?></option>
      


   <?php
    }
?>
</select>
  <?php
      //分頁頁碼
  echo " <div class='col-md-12 text-end pagestyle' >";
      echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
      echo "<br /><a href=?page=1>首頁</a> ";
      echo "第 ";
      for( $i=1 ; $i<=$pages ; $i++ ) {
          if ( $page-3 < $i && $i < $page+3 ) {
              echo "<a href=?page=".$i.">".$i."</a> ";
          }
      }
      echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
   echo " </div>";   
  ?>
  <?php include("footer.php"); ?>  
  
  </body>
</html>