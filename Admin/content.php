<?php
if(isset($_GET['page'])){
    $page=$_GET['page'];
    if(file_exists("$page.php")){
        include "$page.php";
     }else{
        echo "<main id='main' class='main'>
            <div class='pagetitle'>
                <h3>Halaman Tidak Ditemukan</h3>
            </div>
        </main>";

     }

}else{
    include "home.php";
}

?>