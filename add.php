<!doctype html>
<html lang="en">
<?php include("header.php"); ?>
<?php require_once('conn/conn.php'); ?>

<style>

    .add{
        margin:0 20px;;
    }
@media(max-width:767px){
    .add{
        margin:100px 20px;
    }
}

</style>
<main class="content">
<?php include("headermenu.php"); ?>
    
    <div class="add">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="border-bottom spacebetween mt-4">新增訂單</h3>
            </div>
        </div>
        <div class="list">
            <div style="margin:0 20px;">
                <form action="update.php" method="post" enctype="multipart/form-data">

                    <div class="row mb-2 text-left">
                        <div class="col-lg-12 listtitle mb-2 d-flex align-items-center">購買人</div>
                        <div class="col-lg-12">
                            <input type="textarea" id="client" name="client" ass="form-control" placeholder="購買人"
                                required class="form-control" aria-label="Default">
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-2 text-left">
                        <div class="col-lg-4 col-3 listtitle d-flex align-items-center">品名</div>
                        <div class="col-lg-8 col-9">
                            <input type="text" id="titlename" name="titlename" placeholder="品名" required
                                class="form-control" aria-label="Default">
                        </div>
                    </div>
                    <div class="row mb-2 text-left">
                        <div class="col-lg-4 col-3 listtitle d-flex align-items-center">產品圖</div>
                        <div class="col-lg-8 col-9">
                            <input type="textarea" id="imgsrc" name="imgsrc" placeholder="產品圖" required
                                class="form-control" aria-label="Default">
                        </div>
                    </div>

                    <div class="row mb-2 text-left">
                        <div class="col-lg-4 col-3 listtitle d-flex align-items-center">數量</div>
                        <div class="col-lg-8 col-9">
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
                    <div class="row mb-2 text-left">
                        <div class="col-lg-4 col-3 listtitle d-flex align-items-center">價格</div>
                        <div class="col-lg-8 col-9">
                            <input type="number" inputmode="numeric" id="price" name="price" placeholder="價格" required
                                class="form-control" aria-label="Default">
                        </div>
                    </div>


                    <hr>
                    <!-- /.動態新增表單最多9筆 -->

                    <div id="add" class="text-left">
                        1. <div class="row mb-2">
                            <div class="col-lg-4 col-3 listtitle d-flex align-items-center">品名</div>
                            <div class="col-lg-8 col-9">
                                <input type="textarea" id="name1" name="name1" placeholder="品名" class="form-control"
                                    aria-label="Default">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-4 col-3 listtitle d-flex align-items-center">數量</div>
                            <div class="col-lg-8 col-9">
                                <select id="qu1" name="qu1" class="form-control">
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
                        <div class="row mb-2" id="addlist1">
                            <div class="col-lg-4 col-3 listtitle d-flex align-items-center">價格</div>
                            <div class="col-lg-8 col-9">
                                <input type="number" inputmode="numeric" id="price1" name="price1" placeholder="價格"
                                    class="form-control" aria-label="Default">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col-lg-4 col-3"> </div>
                        <div class="col-lg-8 col-9 text-right"><input id="add_terms" name="add_terms" type="button"
                                class="bt-add btn btn-outline-info col-12" value="新增品項"></div>
                    </div>
                    <!-- /.動態新增表單最多9筆 -->
                    <div id="count"></div>
                    <div class="row mb-2 text-left">
                        <div class="col-lg-4 col-3 listtitle d-flex align-items-center">小計</div>
                        <div class="col-lg-8 col-9 text-right">
                            <input id="Text3" type="text" name="subtotal" class="text-right form-control"
                                placeholder="小計" />
                            <input class="col-12 mb-2 mt-2 btn btn-outline-info" id="Button1" type="button"
                                value="小計估算" />
                        </div>
                    </div>
                    <hr>
                    <div class="row  mt-1 listfont mb-1">
                        <div class="col-lg-6 col-3"></div>
                        <div class="col-lg-6 col-9 text-right"><input class="col-12 p-2 mb-2 btn btn-outline-info"
                                id="Button2" type="button" value="總額估算" /></div>
                    </div>

                    <div class="col-lg-5 col-2 text-center"></div>
                    <div class="col-lg-5 col-12 p-2 paylist">

                    </div>
            </div>
        </div>
        <div class="list">
            <div style="margin:0 20px;" class="text-left">
                <div class="row mb-2">
                    <div class="col-lg-4 col-3 listtitle d-flex align-items-center">狀態</div>
                    <div class="col-lg-8 col-9">
                        <select id="state" name="state" class="form-control">
                            <option>狀態</option>
                            <option>待處理</option>
                            <option>已完成</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-4 col-3 listtitle d-flex align-items-center">運費</div>
                    <div class="col-lg-8 col-9 text-right">
                    <input type="number" id="shipping" name="shipping" placeholder="運費" required class="form-control"
                            aria-label="Default">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-4 col-3 listtitle d-flex align-items-center">配送</div>
                    <div class="col-lg-8 col-9 text-right">
                        <select id="delivery" name="delivery" class="form-control">
                            <option>選擇</option>
                            <option>超商</option>
                            <option>宅配</option>
                            <option>郵局</option>
                        </select>
                    </div>
                </div>


                <div class="row mb-2">
                    <div class="col-lg-4 col-3 listtitle d-flex align-items-center">地址</div>
                    <div class="col-lg-8 col-9">
                        <input type="textarea" id="address" name="address" placeholder="地址" required
                            class="form-control" aria-label="Default">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-4 col-3 listtitle d-flex align-items-center">電話</div>
                    <div class="col-lg-8 col-9">
                        <input type="number" id="tel" name="tel" placeholder="電話" required class="form-control"
                            aria-label="Default">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg-12  text-left listtitle d-flex align-items-center mb-2">備註</div>
                    <div class="col-lg-12 text-left">
                        <input type="textarea" id="note" name="note" placeholder=" " required class="form-control"
                            aria-label="Default" rows="10" style="height:100px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="row fixed-bottom  shipbgcolor p-4">
                <div class="col-lg-5 col-8">
                    <input type="text" inputmode="numeric" id="totals" name="totals" placeholder="總計金額"
                        class="form-control form-control-lg" aria-label="Default">
                </div>
                <div class="col-lg-5 col-4 text-center">
                    <div class="Sendbtn">
                        <input type="submit" value="送出" class="btn btn-success btn-lg btn-block">
                    </div>
                    <script src="https://code.jquery.com/jquery-3.4.1.js"
                        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
                        crossorigin="anonymous"></script>
                    <script>
                        //新增項目
                        i = $('#add>div>div>div').length;
                        $('#add_terms').click(function () {
                            $terms = $('#addlist' + i);
                            i++;
                            $terms.after('<div>' + 
    '<div class="col-lg-12">' + i + '.</div>' + 
    '<div class="row" id="addlist' + i + '">' +
        '<br>' +
        '<div class="col-lg-6 col-3 listtitle d-flex align-items-center">品名' + i + '</div>' +
        '<div class="col-lg-4 col-9 mb-2">' +
            '<input type="text" class="form-control" id="name' + i + '" name="name' + i + '" placeholder="輸入品名' + i + '">' +
        '</div>' +
        '<div class="col-lg-6 col-3 listtitle d-flex align-items-center">數量' + i + '</div>' +
        '<div class="col-lg-4 col-9">' +
            '<select class="form-control mb-2" id="qu' + i + '" name="qu' + i + '">' +
                '<option>選擇數量</option>' +
                '<option>1</option>' +
                '<option>2</option>' +
                '<option>3</option>' +
                '<option>4</option>' +
                '<option>5</option>' +
                '<option>6</option>' +
                '<option>7</option>' +
                '<option>8</option>' +
                '<option>9</option>' +
                '<option>10</option>' +
            '</select>' +
        '</div>' +
        '<div class="col-lg-6 col-3 listtitle d-flex align-items-center">價格' + i + '</div>' +
        '<div class="col-lg-4 col-9">' +
            '<input  id="price' + i + '" name="price' + i + '" class="form-control" placeholder="價格' + i + '" required class="form-control" aria-label="Default">' +
        '</div>' +
    '</div>' +
'</div>');



                            if (i >= 10) {
                                alert('最多只能建立10個品項');
                                $('#add_terms').hide();
                            }
                        })

                    </script>
                    <script>
                        //文件準備就緒函式
                        $(function () {
                            //新增加法計算事件
                            $("#Button1").click(function () {
                                //獲取相加的兩個數，並進行資料的強制型別轉換
                                var num1 = parseFloat($("#price").val());
                                var num2 = parseFloat($("#price1").val());
                                //獲取相加的結果
                                var result = num1 + num2;
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
                                var num3 = parseFloat($("#Text3").val());
                                var num4 = parseFloat($("#shipping").val());
                                var num5 = parseFloat($("#discount").val());
                                //獲取相加的結果
                                var result = num3 + num4;
                                //將獲取到的結果傳給totals
                                $("#totals").val(result);
                            });
                        });
                    </script>

                    </form>

                </div></div></div>
            </div>
            <?php include("footer.php"); ?>
</main><!-- /.container -->

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

</body>

</html>