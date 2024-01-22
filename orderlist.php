<!doctype html>
<html lang="en">
  <?php include("header.php"); ?>

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
  <?php
  //輸出資料內容
  $sql="SELECT * FROM chiweiorder ORDER BY idorder DESC";
  while ($row = mysqli_fetch_array ($result)){
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


if ($shipping== 0) {

  $shipping = '免運費';

}
  
  ?>
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
  <button onclick="topFunction()" id="myBtn" title="Go to top">置頂</button>
  <button id="myBtns"><a href="#section1">置底</a></button>
  <main class="container">        
    <div class="row border-bottom">
    <div class="col-lg-6 col-7">
      <p class="pb-2 mb-1 mt-2">訂單#<?php echo $idorder; ?></p>
    </div>
    <div  class="col-lg-6 col-5 mt-2 text-right">
        <small>建立日期：<?php echo $date; ?></small>
    </div>
    </div>
    <div class="listall mt-2">
    <div class="row">
    <div class="col-lg-6 col-4">
      <h5 class="blog-post-title">購買人</h5>
    </div>
    <div class="col-lg-6 col-8 text-right">
      <h5 class="mr-2"><?php echo $client; ?></h5>
    </div>
    </div>
    <div class="listfont mt-2 pl-2">品項</div>
    <hr style="margin-top: 0.3rem; margin-bottom: 1rem;">
    <div class="">
      <div class="row listfont mb-2">
      <div class="col-lg-5 col-6">品名</div>
      <div class="col-lg-3 col-4">數量</div>
      <div class="col-lg-2 col-2">單價</div>
      </div>
    </div>   
    <div class="row mb-3">
      <div class="col-lg-5 col-6"><?php echo $title; ?></div>
      <div class="col-lg-3 col-4"><?php echo $quantity; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price; ?></div>     
    </div>
    <div class="row  mb-3">
      <div class="col-lg-5 col-6"><?php echo $name1; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu1; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price1; ?></div>          
    </div>
    <div class="row  mb-3">
      <div class="col-lg-5 col-6"><?php echo $name2; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu2; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price2; ?></div>          
    </div>
    <div class="row  mb-3">
      <div class="col-lg-5 col-6"><?php echo $name3; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu3; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price3; ?></div>          
    </div>
    <div class="row  mb-3">
      <div class="col-lg-5 col-6"><?php echo $name4; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu4; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price4; ?></div>          
    </div>
    <div class="row mb-3">
      <div class="col-lg-5 col-6"><?php echo $name5; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu5; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price5; ?></div>          
    </div>
    <div class="row mb-3">
      <div class="col-lg-5 col-6"><?php echo $name6; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu6; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price6; ?></div>          
    </div>
        <div class="row mb-3">
      <div class="col-lg-5 col-6"><?php echo $name7; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu7; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price7; ?></div>          
    </div>
        <div class="row mb-3">
      <div class="col-lg-5 col-6"><?php echo $name8; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu8; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price8; ?></div>          
    </div>
        <div class="row mb-3">
      <div class="col-lg-5 col-6"><?php echo $name9; ?></div>
      <div class="col-lg-3 col-4"><?php echo $qu9; ?></div>
      <div class="col-lg-2 col-2"><?php echo $price9; ?></div>          
    </div>
    <hr>
    <div class="mr-2">
    <div class="row mb-2">
      <div class="col-lg-9 col-9">小計</div>
      <div class="col-lg-2 col-3 text-right"><?php echo $subtotal; ?></div>
    </div>
    <hr>
    </div>
        <div class="mr-2">
    <div class="row mb-2">
      <div class="col-lg-5 col-12">配送地址</div>
      <div class="col-lg-7 col-12 text-right"><?php echo $address; ?></div>
    </div>

    <hr>
    <div class="row  mt-1 listfont text-center mb-2">
      <div class="col-lg-6 col-6">配送方式</div>
      <div class="col-lg-6 col-6">代墊運費</div>
    </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-6 col-6 shipbgcolor text-center  p-2"><?php echo $delivery; ?></div>
      <div class="col-lg-6 col-6 bgcolor text-center p-2 paylist"><?php echo $shipping; ?></div>
    </div>

  <!-- /.row -->

  </main>
  <?php
     }
  ?>
  <!-- /.container --> 
  <?php
      //分頁頁碼
  echo " <div class='col-md-12 text-end pagestyle text-right' >";
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
