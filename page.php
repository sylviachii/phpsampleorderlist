    <?php
      //分頁頁碼
      echo "<div class='row mt-4' style='margin:0 10px;'>";
      echo " <div class='col-md-12 text-end pagestyle text-center justify-content-space-between' >";
      echo '共 '.$data_nums.' 筆-在 '.$page.' 頁-共 '.$pages.' 頁';
      echo " </div>";  
            echo "<div class='col-12 d-flex justify-content-between mt-2 mb-2'>";
            echo " <div class='col-md-12 text-end pagestyle text-center d-flex justify-content-between' >";
            echo "<br /><a href=?page=1>首頁</a> ";

       echo "第 ";
      for( $i=1 ; $i<=$pages ; $i++ ) {
          if ( $page-3 < $i && $i < $page+3 ) {
              echo "<a href=?page=".$i.">".$i."</a> ";
          }
      }
      echo " 頁 <a href=?page=".$pages.">末頁</a><br /><br />";
   echo " </div>";   
      echo " </div>";  
   echo " </div>";
  ?>