<!doctype html>
<html lang="en">
<?php include("header.php"); ?>
<main class="content">
<?php include("headermenu.php"); ?>
    <?php include("menu.php"); ?>
    <div style="margin:0 20px;">
    <?php require_once('conn/conn4.php'); ?>
    <?php
      //輸出資料內容
      $sql="SELECT * FROM chiweiproduct";
      $result = mysqli_query($link,$sql); // 執行SQL查詢
    
      while ($row = mysqli_fetch_array ($result)){
        $title = $row['titlename'];
        $price = $row['price'];
        $quantity = $row['quantity'];
        $productid = $row['productid'];
        $img = $row['img'];
      ?>
    <?php
    $sqls = "SELECT * FROM chiweiproduct"; //在test資料表中選擇所有欄位
    $resultss = mysqli_query($link,$sqls); // 執行SQL查詢
    
    // 检查查询结果
    if ($result->num_rows > 0) {
        // 输出数据
        echo " <div class='spacebetween mt-4'><h4>採購詳情</h4></div>";
    while ($row = $result->fetch_assoc()) {
    
    // 品項

    echo "<div class='list'> <a href='upeditproduct.php?id=".$row['productid'] ."'>";
    echo " <div>";
    echo " <div class='spacebetween'>";
    echo " <div><img width='64' src='". $row['img']."'></div>";
    echo " <div class='prodectname'>". $row['titlename'] ."";
    echo " <div class='ordercount'>";
    echo " <div class='ordercountlist'>單價：" .$row['price'] . "</div>";
    echo " <div class='ordercountlist'>庫存：" .$row['quantity'] . "</div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";
    echo " </div>";
    echo "</a>  </div>";

        // 可以根据表的字段数量和名称扩展输出
    }

       
} else {
    echo "0 results";
}
    ?>

        <!--select name="papermenu" id="papermenu">
    <?php
     while ($row = mysqli_fetch_array ($resultss)){
        $title11 = $row['titlename'];
    ?>
    
          <option value="<?php echo $title11;?>"><?php echo $title11;?></option>
          
    
    
       <?php
        }
    ?>
    </select -->
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
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <button id="myBtns"><a href="#section1">down</a></button>
        <?php
     }
  ?>


        <!-- /.container -->
    </div>
    <?php include("footer.php"); ?>

</main>
</body>
</html>