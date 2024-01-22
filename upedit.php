<!doctype html>
<html lang="en">
<?php include("header.php"); ?>
<?php 
    require_once('conn/conn.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM chiweiorder WHERE idorder = ".$id;
    $result = mysqli_query($link,$sql); // 執行SQL查詢
    $row = $result->fetch_assoc();
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
    $name6 = $row['name6'];  
    $price6 = $row['price6']; 
    $qu6 = $row['qu6']; 
    $name7 = $row['name7'];  
    $price7 = $row['price7']; 
    $qu7 = $row['qu7']; 
    $name8 = $row['name8'];  
    $price8 = $row['price8']; 
    $qu8 = $row['qu8']; 
    $name9 = $row['name9'];  
    $price9 = $row['price9']; 
    $qu9 = $row['qu9']; 
    $subtotal= $row['subtotal'];
    $shipping= $row['shipping'];
    $total= $row['total'];
    $discount= $row['discount'];
    $delivery= $row['delivery'];
    $address = $row['address'];
    $tel = $row['tel'];
    $note = $row['note'];
    $date=$row['date']; 
    $imgsrc=$row['imgsrc']; 
    $imgsrc1=$row['imgsrc1']; 
    $imgsrc2=$row['imgsrc2']; 
    $imgsrc3=$row['imgsrc3']; 
    $imgsrc4=$row['imgsrc4']; 
    $imgsrc5=$row['imgsrc5']; 
    $imgsrc6=$row['imgsrc6']; 
    $imgsrc7=$row['imgsrc7'];
    $imgsrc8=$row['imgsrc8']; 
    $imgsrc9=$row['imgsrc9']; 
    
  ?>

<style>
    .upedit {
        margin: 0 20px;
    }

    @media(max-width:767px) {
        .upedit {
            margin: 100px 20px;
        }
    }
</style>
<main class="content">
    <?php include("headermenu.php"); ?>
    <div class="upedit">

        <div class="row">
            <div class="col-lg-12">
                <h3 class="border-bottom spacebetween mt-4">修改訂單#
                    <?php echo $row['idorder']?>
                </h3>
            </div>
        </div>
        <div class="list mt-4">
            <div style="margin:0 10px;">
                <form action="update1.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="idorder" value="<?php echo $row['idorder']?>">
                    <div class="row pb-2 mb-4 border-bottom listtop">
                        <div class="col-lg-6 col-6 text-left ml-2">
                            <h5>訂單#
                                <?php echo $row['idorder']?>
                            </h5>
                        </div>
                        <div class="col-lg-5 col-4 text-right state">
                            <h5>
                                <?php echo $row['state']?>
                            </h5>
                        </div>
                    </div>
                    <div class="row pb-4 mb-3 text-left border-bottom">
                        <div class="col-lg-2 listtitle mb-2">購買人</div>
                        <div class="col-lg-10 text-right">
                            <input type="text" id="client" name="client" placeholder="訂購" required class="form-control"
                                aria-label="Default" value="<?php echo $row['client']?>" class="text-right" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc" name="imgsrc" ass="form-control" placeholder="產品圖"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc']?>" />
                        </div>
                    </div>
                    <div class="row mb-2 text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="titlename" name="titlename" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['titlename']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="quantity" name="quantity" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['quantity']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price" name="price" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖2</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc1" name="imgsrc1" ass="form-control" placeholder="產品圖2"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc1']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name1" name="name1" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['name1']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu1" name="qu1" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu1']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price1" name="price1" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price1']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖3</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc2" name="imgsrc2" ass="form-control" placeholder="產品圖3"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc2']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name2" name="name2" placeholder="品名" class="form-control"
                                aria-label="Default" value="<?php echo $row['name2']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu2" name="qu2" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu2']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price2" name="price2" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price2']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖4</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc3" name="imgsrc3" ass="form-control" placeholder="產品圖4"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc3']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name3" name="name3" placeholder="品名" class="form-control"
                                aria-label="Default" value="<?php echo $row['name3']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu3" name="qu3" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu3']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price3" name="price3" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price3']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖5</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc4" name="imgsrc4" ass="form-control" placeholder="產品圖5"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc4']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name4" name="name4" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['name4']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu4" name="qu4" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu4']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price4" name="price4" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price4']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖6</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc5" name="imgsrc5" ass="form-control" placeholder="產品圖5"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc5']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名6</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name5" name="name5" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['name5']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu5" name="qu5" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu5']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price5" name="price5" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price5']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖7</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc6" name="imgsrc6" ass="form-control" placeholder="產品圖6"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc6']?>" />
                        </div>
                    </div>

                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name6" name="name6" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['name6']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu6" name="qu6" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu6']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price6" name="price6" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price6']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖8</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc7" name="imgsrc7" ass="form-control" placeholder="產品圖7"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc7']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name7" name="name7" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['name7']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu7" name="qu7" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu7']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price7" name="price7" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price7']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖9</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc8" name="imgsrc8" ass="form-control" placeholder="產品圖8"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc8']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name8" name="name8" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['name8']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu8" name="qu8" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu8']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price8" name="price8" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price8']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">產品圖10</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="imgsrc9" name="imgsrc9" ass="form-control" placeholder="產品圖9"
                                class="form-control" aria-label="Default" value="<?php echo $row['imgsrc9']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">品名</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="name9" name="name9" ass="form-control" placeholder="品名"
                                class="form-control" aria-label="Default" value="<?php echo $row['name9']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">數量</div>
                        <div class="col-lg-8 col-8">
                            <input type="text" id="qu9" name="qu9" placeholder="數量" class="form-control"
                                aria-label="Default" value="<?php echo $row['qu9']?>" />
                        </div>
                    </div>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">價格</div>
                        <div class="col-lg-8 col-8">
                            <input type="number" id="price9" name="price9" placeholder="價格" class="form-control"
                                aria-label="Default" value="<?php echo $row['price9']?>" />
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2  text-left">
                        <div class="col-lg-4 col-4 listtitle">小計</div>
                        <div class="col-lg-8 col-8 text-right">

                            <input id="Text3" type="text" name="subtotal" class="text-right form-control" />

                        </div>
                    </div>
                    <div class="col-lg-12"><input class="col-12 p-2 mb-2 btn btn-outline-info" id="Button1"
                            type="button" value="小計估算" /></div>
                    <div class="col-lg-12"><input class="col-12 p-2 mb-2 btn btn-outline-info" id="Button2"
                            type="button" value="總額估算" /></div>
                    <hr>
            </div>
        </div>


        <div class="list">
            <div style="margin:0 10px;" class="text-left">
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-3 listtitle">狀態</div>
                    <div class="col-lg-8 col-9">
                        <select type="text" id="state" name="state" class="form-control">
                            <option>
                                <?php echo $row['state']?>
                            </option>
                            <option>待處理</option>
                            <option>已完成</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-3 listtitle">運費</div>
                    <div class="col-lg-8 col-9 text-right">
                        <input type="text" id="shipping" name="shipping" ass="form-control" placeholder="運費" required
                            class="form-control" aria-label="Default" value="<?php echo $row['shipping']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-3 listtitle">配送</div>
                    <div class="col-lg-8 col-9 text-right">
                        <select id="delivery" name="delivery" class="form-control">
                            <option>
                                <?php echo $row['delivery']?>
                            </option>
                            <option>全家超商</option>
                            <option>小七超商</option>
                            <option>宅配</option>
                            <option>郵局</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-3 listtitle">地址</div>
                    <div class="col-lg-8 col-9">
                        <input type="text" id="address" name="address" placeholder="地址" class="form-control"
                            aria-label="Default" value="<?php echo $row['address']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-4 col-3 listtitle">電話</div>
                    <div class="col-lg-8 col-9">
                        <input type="text" id="tel" name="tel" placeholder="電話" class="form-control"
                            aria-label="Default" value="<?php echo $row['tel']?>" />
                    </div>
                </div>
                <div class="row mb-2  text-left">
                    <div class="col-lg-12 mb-3 text-left listtitle">備註</div>
                    <div class="col-lg-12 text-left">
                        <input type="textarea" id="note" name="note" placeholder="備註" class="form-control"
                            aria-label="Default" rows="10" style="height:100px;" value="<?php echo $row['note']?>" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
    <div class="row fixed-bottom  shipbgcolor p-4">
        <div class="col-lg-5 col-8">
            <input type="text" inputmode="numeric" id="totals" name="totals" placeholder="總計金額"
                class="form-control form-control-lg" aria-label="Default" value="<?php echo $row['total']?>" />
        </div>
        <div class="col-lg-5 col-4 text-center">
            <div class="Sendbtn">
                <input type="submit" value="送出" class="btn btn-success btn-lg btn-block">
            </div>
            </form>


            <script>
                //文件準備就緒函式
                $(function () {
                    //新增加法計算事件
                    $("#Button1").click(function () {
                        //獲取相加的兩個數，並進行資料的強制型別轉換
                        var num1 = parseFloat($("#price").val()) || 0;
                        var num2 = parseFloat($("#price1").val()) || 0;
                        var num3 = parseFloat($("#price2").val()) || 0;
                        var num4 = parseFloat($("#price3").val()) || 0;
                        var num5 = parseFloat($("#price4").val()) || 0;
                        var num6 = parseFloat($("#price5").val()) || 0;
                        var num7 = parseFloat($("#price6").val()) || 0;
                        var num8 = parseFloat($("#price7").val()) || 0;
                        var num9 = parseFloat($("#price8").val()) || 0;
                        var num10 = parseFloat($("#price9").val()) || 0;


                        //獲取相加的結果
                        var result = num1 + num2 + num3 + num4 + num5 + num6 + num7 + num8 + num9;
                        //將獲取到的結果傳給Text3
                        $("#Text3").val(result);
                        $(".Sendbtn").addClass("intro");
                    });
                });
            </script>
            <script>
                //文件準備就緒函式
                $(function () {
                    //新增加法計算事件
                    $("#Button2").click(function () {
                        //獲取相加的兩個數，並進行資料的強制型別轉換
                        var num3 = parseFloat($("#Text3").val()) || 0;
                        var num4 = parseFloat($("#shipping").val()) || 0;
                        var num5 = parseFloat($("#discount").val()) || 0;
                        //獲取相加的結果
                        var result = num3 + num4;
                        //將獲取到的結果傳給totals
                        $("#totals").val(result);
                    });
                });
            </script>

</main>
<!-- /.container -->

</body>

</html>