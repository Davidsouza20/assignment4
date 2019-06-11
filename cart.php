<?php 
    include("dbconection.php");
    session_start();
    if (empty($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }
   
    if(!isset($_SESSION['login_user']))
    {
        // not logged in
        header('Location: login.php');
        exit();
    }
    
    else {
        echo "Welcome Dear <h1>" . $_SESSION['login_user']. "</h1>";
    }


    $id = intval($_GET['id']);
    try {
      $query = "SELECT * FROM products WHERE id = $id"; 
      $stmt = $db->prepare($query);
      $stmt->execute();   
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      array_push($_SESSION['cart'], $results);
    }
    catch (Exception $ex) {
      echo "I am getting the following error:  $ex";
      die();
  }


?>


<!DOCTYPE html>
<html>

<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
 <meta name="description" content="#">

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
  <div id="body">
  <header id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"> <img id="logo-img" src="img/logo-nav.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">STORE <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cart.php">CART</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CONTACT</a>
                  </li>
               
                
              </ul>
            </div>
          </nav>  
  </header>
  
  

<div id="grid-container">
    <h1>Shopping Cart</h1><br>

<?php echo $id; echo $query;  echo $results; ?> 
<table class="table">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $value) {?>
                    <tr>
                    <td><?php echo $value['name']; ?></td>
                    <td><?php echo '1' ?></td>
                    <td><?php echo number_format((float)$value['price'], 2, '.', ''); ?></td>
                    <td onclick="" class="btn btn-danger">x</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
            
            
            
        
</div>  

<footer class="footer">
      <p id="copyright">Copyright � 2019 Hellen Fitness</p>

</footer>

</div>
</body>

</html> 