<?php
session_start();
session_destroy();

setcookie("cid",$id_login,time()-(60*60*24*90),"/");
setcookie("cemail",$email,time()-(60*60*24*90),"/");
setcookie("cnama",$nama_login,time()-(60*60*24*90),"/");
?>
<script>
    document.location="index.php";
</script>