<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
    
  <?php include("header.php"); ?>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <br>
    第一層
    <select id="myParentSelect">
        <option value="">請選擇</option>
 
        <?php
		// 取得第一層option資料
		require_once('conn/conn1.php');
		

?>
<?php

 $sqls = "SELECT productid, titlename FROM chiweiproduct where parentid = 0"; //在test資料表中選擇所有欄位
$resultrt = mysqli_query($link,$sqls); // 執行SQL查詢   
      
 while ($row = mysqli_fetch_array ($resultrt)){



             	echo '<option value="' . $row['productid'] . '">' . $row["titlename"]. '</option>' . "\n";

        } ?>
    </select>
    第二層
    <select id="myFirstChildSelect">
        <option value="">請選擇</option>
                <option value="">我非動態</option>
    </select>
    <script>
    $(function() {
        $('#myParentSelect').change(function() {
            //更動第一層時第二層清空
            $('#myFirstChildSelect').empty().append("<option value=''>請選擇y</option>");
            var i = 0;
            var conceptName = $('#myParentSelect').find(":selected").text();
            alert(conceptName);
            $.ajax({
                type: "GET",
                url: "action.php",
                data: {
                    lv: $('#myParentSelect option:selected').val()
                },
                datatype: "json",
                success: function(result) {
                    //當第一層回到預設值時，第二層回到預設位置
                    if (result == "") {
                        $('#myFirstChildSelect').val($('option:first').val());
                    }
                    //依據第一層回傳的值去改變第二層的內容
                    while (i < result.length) {
                        $("#myFirstChildSelect").append("<option value='" + i + "'>" + results[i]['titlename'] + "</option>");
                        i++;
                         $NewArray=array('A','B','C');

                    }
                    
                },
                error: function(xhr, status, msg) {
                    console.error(xhr);
                    console.error(msg);
                }
            });
            
            
        });
    });
    </script>
 
	<script type="text/javascript">
	
		$(function () {
			setFirstSelect();
			setEvent();
		});
		
		function setFirstSelect() {
			$.ajax({
				'url' : 'testsele.php',
				'type' : 'GET',
				'data' : {
					'action' : 'getFirst'
				},
				'dataType' : 'json',
				'success' : function(oJson) {
					for (var key in oJson) {
						$("#first").append($("<option></option>").attr("value", oJson[key]).text(oJson[key]));
					}
				},
				'error' : function(e, settings, techNote, message) {
					console.log(e);
				}
			});
		}
		
		function setEvent() {
			$('#first').change(function() { 
				var firstValue = $("#first").find(":selected").val();
				
				$("#second option").remove();
				
				if (firstValue == "select") {
					$("#second").append($("<option></option>").text("select"));
				} else {
					$.ajax({
						'url' : 'testsele.php',
						'type' : 'GET',
						'data' : {
							'action' : 'getSecond',
							'firstValue' : firstValue
						},
						'dataType' : 'json',
						'success' : function(oJson) {
							for (var key in oJson) {
								$("#second").append($("<option></option>").attr("value", oJson[key]).text(oJson[key]));
							}
						},
						'error' : function(e, settings, techNote, message) {
							console.log(e);
						}
					});
				}
				
			});
		}
	
	</script>

	
	<select id="first">
		<option>select</option>
	</select>
	
	<select id="second">
		<option>select</option>
	</select>

</body>
</html>
