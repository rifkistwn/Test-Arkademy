<!DOCTYPE html>
 <html>
 <head>
  <title>Validasi</title>
 </head>
 <body>
 

  <form action="" method="get">
   <input type="text" name="Password">
   <button name="user">Validate</button>
  </form>
  <?php
   if (isset($_GET['user'])) {
    $user = $_GET['Password'];
    if (preg_match("/([A-z]{5}_[A-Z]{1}|[a-z]{5}_[A-Z]{2}|[A-Z]{2}.[a-z]{2})/", $user)) {  
     echo "Password Valid"; 
    }else{
     echo "Password Anda Tidak Valid";
    }
   }
  ?>
 </body>
 </html>
