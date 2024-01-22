<!doctype html>
<html lang="en">
  <?php include("header.php"); ?>
  <?php 
    require_once('conn/conn4.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM chiweiproduct WHERE productid = ".$id;
    $result = mysqli_query($link,$sql); // 執行SQL查詢
    $row = $result->fetch_assoc();
    $titlename = $row['titlename'];
    $qu = $row['qu'];
    $price = $row['price'];

  ?>
  <main class="container">   
    <form action="upproductlink.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="productid" value="<? echo $productid;?>">   
      <div class="row">
        <div class="col-lg-12">
        <h3 class="pb-4 mb-4 mt-4 border-bottom">修改產品資訊#<?php echo $row['productid']?></h3>
        </div>  
      </div>
      <div class="row mb-2">
        <div class="col-lg-6 col-3">品名</div>
        <div class="col-lg-4 col-9">
        <input type="text" id="titlename" name="titlename" ass="form-control" placeholder="品名" required class="form-control" aria-label="Default" value=
        "<?php echo $row['titlename']?>"/>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-lg-6 col-3">數量</div>
        <div class="col-lg-4 col-9">
        <input type="text" id="qu" name="qu" ass="form-control" placeholder="數量" required class="form-control" aria-label="Default" value=
        "<?php echo $row['qu']?>"/> 
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-lg-6 col-3">價格</div>
        <div class="col-lg-4 col-9">
        <input type="text" id="price" name="price" ass="form-control" placeholder="價格" required class="form-control" aria-label="Default" value=
        "<?php echo $row['price']?>"/> 
        </div>
      </div>
      <hr>
      <div class="row mb-4">
        <div class="col-lg-5 col-5 mr-2 ml-3 text-center  p-2"></div>
        <div class="col-lg-5 col-5 text-center p-2 paylist" >
        <div class="Sendbtn" >
          <input type="submit" value="送出" class="btn btn-success btn-lg btn-block"></div>
        </div>
      </div>
    </form> 
  </main>
  <!-- /.container -->  
  <?php include("footer.php"); ?>  
  </body>
</html>

