<!doctype html>
<html lang="en">
<?php include("header.php"); ?>
<main class="content">
<?php include("headermenu.php"); ?>
    <?php include("menu.php"); ?>
<?php include("filter.php"); ?>
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
        $result = mysqli_query($link,"select * from chiweiorder WHERE state= '已完成'");
    ?>
    <?php
    // 初始化计数器
    while ($row = mysqli_fetch_array ($result)){
        $nameCount = 0;
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
    
        for ($i = 1; $i <= 10; $i++) {
            $nameKey = 'name' . $i;
            if (empty($row['name' . $i])) {
            // 如果 $row['qu'.$i] 為空，跳過該次迴圈
            continue;
        }
    
        // 检查 $row['name' . $i] 是否存在且不为空
        if (isset($row[$nameKey]) && !empty($row[$nameKey])) {
        // 如果存在且不为空，增加计数器
        $nameCount++;
        }  
    }
    // 将结果加 1
    $nameCount++;
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

    <div style="margin:0 20px;">
        <div class="list">
            <a href='orderdetal.php?id=<? echo $row[idorder];?>' class="">
                <div class="spacebetween">
                </div>
                <div class="spacebetween">
                    <h6>訂單#
                        <?php echo $idorder; ?>
                    </h6>
                    <div class="spacebetweens">
                        <h6 class="listtitle">商品: <h6>(<?php echo$nameCount; ?>)</h6></h6>
                    </div>
                </div>
                <div class="line"></div>
                <div class="spacebetween">
                    <span class="span-3">
                        <div class="listtitle mb-2">購買人:</div>
                        <div class="listtitle mb-2">配送:</div>
                    </span>
                    <span class="span-4">
                        <div class="listright mb-2">
                            <?php echo $client; ?>
                        </div>
                        <div class="listright mb-2">
                            <?php echo $delivery; ?>
                        </div>
                    </span>
                </div>
                <div class="spacebetween">
                    <div><?php echo$state; ?></div>
                    <div class="text-right">
                        <small>建立日期：
                            <?php echo $date; ?>
                        </small>
                    </div>
                </div>
            </a>
        </div>
        <!-- /.row -->
    </div>
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

</main>
</body>

</html>
<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>