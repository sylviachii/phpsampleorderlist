<!doctype html>
<html lang="en">
<?php include("header.php"); ?>

<main class="content">
<?php include("headermenu.php"); ?>
    <?php include("menu.php"); ?>
            <div style="margin:0 20px;">
                <div class='spacebetween mt-4'><h4>小幫手費用統計</h4>
            </div>
    <div class="list">
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
    $shipping= $row['shipping'];
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
        window.onscroll = function () { scrollFunction() };
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

        <div class="spacebetween">
            <h5>訂單#<?php echo $idorder; ?></h5>
            <div class="spacebetweens">
                <div class="listtitle">建立日期：
                <?php echo $date; ?></div>
            </div>
        </div>
    <div class="listall mt-2">
        <div class="spacebetween">
            <div class="">
                <div class="listtitle">代墊運費</div>
            </div>
            <div class="text-right">
                <h5 class="mr-2">＄
                    <?php echo $shipping; ?>
                </h5>
            </div>
        </div>
        <hr>
</div>

        <!-- /.row -->


        <?php
     }
  ?>
        <!-- /.container -->

  </div>        <?php
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
       </div>
     <?php include("footer.php"); ?>     
</main>

</body>

</html>