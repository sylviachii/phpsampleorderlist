<!doctype html>
<html lang="en">
  <?php include("header.php"); ?>

  <?php
  require_once('conn/conn2.php'); 
  $data_nums = mysqli_num_rows($result); //統計總比數
      $per = 5; //每頁顯示項目數量
      $pages = ceil($data_nums/$per); //取得不小於值的下一個整數
      if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
          $page=1; //則在此設定起始頁數
      } else {
          $page = intval($_GET["page"]); //確認頁數只能夠是數值資料
      }
      $start = ($page-1)*$per; //每一頁開始的資料序號
  $result = mysqli_query($link,"select * from chiweiorder WHERE state= '待處理'");
  ?>
  <?php
  //輸出資料內容
  $sql="SELECT * FROM chiweiorder WHERE state= '待處理'";
  
  while ($row = mysqli_fetch_array ($result)){
    $title = $row['titlename'];
    $quantity = $row['quantity'];
    $price = $row['price'];
    $idorder = $row['idorder'];
    $client = $row['client'];
    $shipping= $row['shipping'];
    $delivery= $row['delivery'];
    $address = $row['address'];
    $tel = $row['tel'];
    $note = $row['note'];
    $state = $row['state'];
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
    <div class="row border-bottom order-top">
        
    <div class="col-lg-6 col-4">
      <p class="pb-2 mb-1 mt-2"><a href='orderdetal.php?id=<? echo $row[idorder];?>' class="">訂單#<?php echo $idorder; ?></a></p>
    </div>
    <div  class="col-lg-6 col-8 mt-2 text-right">
        <small>建立日期：<?php echo $date; ?></small>
    </div>
    </div>
    <div class="listall mt-4">
    <div class="row">
    <div class="col-lg-6 col-4">
      <h6 class="blog-post-title">購買人</h6>
    </div>
    <div class="col-lg-6 col-8 text-right">
      <h6 class="mr-2"><?php echo $client; ?></h6>
    </div>
    </div>
    <hr>
        <div class="mr-2">
    <div class="row mb-2">
      <div class="col-lg-5 col-4">配送地址</div>
      <div class="col-lg-7 col-8 text-right"><?php echo $address; ?></div>
    </div>

    <div class="row mb-2">
      <div class="col-lg-5 col-6">聯絡電話</div>
      <div class="col-lg-7 col-6 text-right"><?php echo $tel; ?></div>
    </div>
    
        <div class="row mb-2">
      <div class="col-lg-12 col-12">備註</div>
      <div class="col-lg-12 col-12 "><?php echo $note; ?></div>
    </div>
    <hr>
    <div class="row  mt-1 listfont text-center mb-2">
      <div class="col-lg-4 col-4">配送方式</div>
      <div class="col-lg-4 col-4">代墊運費</div>
      <div class="col-lg-4 col-4">狀態</div>
    </div>
    </div>
    <div class="row br">
      <div class="col-lg-4 col-4  text-center bgcolor p-2"><?php echo $delivery; ?></div>
      <div class="col-lg-4 col-4 bgcolor text-center p-2 paylist"><?php echo $shipping; ?></div>
      <div class="col-lg-4 col-4 bgcolor text-center p-2  shipbgcolor"><?php echo $state; ?></div>
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
