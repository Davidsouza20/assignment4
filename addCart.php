<?php
    session_start();
    
    if (empty($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    array_push($_SESSION['cart'], $_POST);        
    //var_dump($_SESSION['cart']);
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loja </title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="function.js"></script>
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body>
  <div id="background">
  <?php 
   echo "<script> 
    confirm('Item added');
    window.location.href = 'index.php';
   </script>"
  ?>
  </div>
</body>
</html>