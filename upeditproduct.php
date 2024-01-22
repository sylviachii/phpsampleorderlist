<!doctype html>
<html lang="en">
<?php include("header.php"); ?>
<?php 
    require_once('conn/conn4.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM chiweiproduct WHERE productid  = ".$id;
    $result = mysqli_query($link,$sql); // 執行SQL查詢
    $row = $result->fetch_assoc();
    $title = $row['titlename'];
    $quantity = $row['quantity'];
    $price = $row['price'];
    $img = $row['img'];
    $buyprice = $row['buyprice'];

  ?>
  
  <style>
    .upeditproduct{
        margin:0 20px;
    }
    @media(max-width:767px){
    .upeditproduct{
        margin: 100px 20px;
    }
}
</style>
<main class="content" style=" justify-content: flex-start;">
<?php include("headermenu.php"); ?>

    <div class="upeditproduct">
                <div class="row">
            <div class="col-lg-12">
                <h3 class="border-bottom spacebetween mt-4">修改產品資訊#
                            <?php echo $row['productid']?></h3>
            </div>
        </div>

        <div class="list" >
            <div  style="margin:0 20px;">
            <form action="updateproduct.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="productid" value="<?php echo $row['productid']?>">

                <div class="row mb-2">
                    <div class="col-lg-12">
                        <img src="<?php echo $row['img']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-4 listtitle d-flex align-items-center">圖片</div>
                    <div class="col-lg-8 col-8">
                        <input type="text" id="img" name="img" ass="form-control" placeholder="圖片" required
                            class="form-control" aria-label="Default" value="<?php echo $row['img']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-4 listtitle d-flex align-items-center">品名</div>
                    <div class="col-lg-8 col-8">
                        <input type="text" id="titlename" name="titlename" ass="form-control" placeholder="品名" required
                            class="form-control" aria-label="Default" value="<?php echo $row['titlename']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-4 listtitle d-flex align-items-center">數量</div>
                    <div class="col-lg-8 col-8">
                        <input type="text" id="quantity" name="quantity" placeholder="數量" required class="form-control"
                            aria-label="Default" value="<?php echo $row['quantity']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-4 listtitle d-flex align-items-center">販售價格</div>
                    <div class="col-lg-8 col-8">
                        <input type="text" id="price" name="price" placeholder="價格" class="form-control"
                            aria-label="Default" value="<?php echo $row['price']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-4 listtitle d-flex align-items-center">採購價格</div>
                    <div class="col-lg-8 col-8">
                        <input type="text" id="buyprice" name="buyprice" placeholder="採購價格" class="form-control"
                            aria-label="Default" value="<?php echo $row['buyprice']?>" />
                    </div>

                </div> 
                                <div class="row mb-2">
                    <div class="col-lg-12  text-left listtitle mb-2">備註</div>
                    <div class="col-lg-12 text-left">
                        <input type="textarea" id="note" name="note" placeholder=" " required class="form-control"
                            aria-label="Default" rows="10" style="height:100px; value="<?php echo $row['note']?>" />
                    </div>
                </div>
                </div></div></div>
                      <?php include("footer.php"); ?>    
                <div class="row fixed-bottom  shipbgcolor p-4">
                    <div class="col-lg-12 text-center">
                        <div class="Sendbtn">
                            <input type="submit" value="送出" class="btn btn-success btn-lg btn-block">
                        </div>
            </form>
            </div>
        </div>

    </div>
 
</main>
<!-- /.container -->
                     
</body>

</html>