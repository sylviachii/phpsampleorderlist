<!doctype html>
<html lang="en">
<?php include("header.php"); ?>
<?php require_once('conn/conn4.php'); ?>
<style>
    .addproduct{
        margin:0 20px;
    }
    @media(max-width:767px){
    .addproduct{
        margin: 100px 20px;
    }
}
</style>
<main class="content">
    <?php include("headermenu.php"); ?>
    <div class="addproduct">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="border-bottom spacebetween mt-4">新增產品</h3>
            </div>
        </div>
        <div class="list">
            <div style="margin:0 20px;">
                <form action="addproductlink.php" method="post" enctype="multipart/form-data">

                    <div class="row mb-3 pb-3 border-bottom">
                        <div class="col-lg-4 col-4 listtitle d-flex align-items-center justify-content-center">產品名稱</div>
                        <div class="col-lg-8 col-8">

                            <input type="text" id="titlename" name="titlename" placeholder="新增產品名稱" required
                                class="form-control" aria-label="Default">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 col-4 listtitle d-flex align-items-center justify-content-center">產品價格</div>
                        <div class="col-lg-8 col-8">

                            <input type="number" id="price" name="price" placeholder="新增產品價格" required
                                class="form-control" aria-label="Default">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 col-4 listtitle d-flex align-items-center justify-content-center">購買價格</div>
                        <div class="col-lg-8 col-8">

                            <input type="number" id="buyprice" name="buyprice" placeholder="新增採購價格" required
                                class="form-control" aria-label="Default">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 col-4 listtitle d-flex align-items-center justify-content-center">產品數量</div>
                        <div class="col-lg-8 col-8">
                            <select id="quantity" name="quantity" class="form-control">
                                <option>選擇數量</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                <div class="row mb-2">
                    <div class="col-lg-12  text-left listtitle mb-2">備註</div>
                    <div class="col-lg-12 text-left">
                        <input type="textarea" id="note" name="note" placeholder=" " required class="form-control"
                            aria-label="Default" rows="10" style="height:100px;">
                    </div>
                </div>
                <div class="row">
                    <div class="row fixed-bottom  shipbgcolor p-4">
                <div class="col-lg-12 text-center">
                    <div class="Sendbtn">
                    <input type="submit" value="送出" class="btn btn-success btn-lg btn-block">
                </div>
                
                </form>
            </div>
        </div></div>
           
    </div></div></div>
 <?php include("footer.php"); ?>
</main><!-- /.container -->

</body>

</html>