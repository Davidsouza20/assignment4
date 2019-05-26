<?php include("dbconection.php"); ?>

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
                  <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Exercicios</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Loja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                  </li>
               
                
              </ul>
            </div>
          </nav>  
  </header>
  <div id="banner">
    <img class="mySlides" src="img/banner.png" style="width:100%">  
  </div>
  
<div id="grid-container">

<?php foreach ($db->query($query) as $row) {
    $id = $row['id'];
    echo '<div class="card" style="width: 18rem;">';
    echo '<img src=\"' .$row['img_path']. '\" class="card-img-top" alt=\"' .$row['name'].'\">';
    echo ' <div class="card-body">';
    echo ' <h5 class="card-title">' .$row['name']. '</h5>';
    echo '<p class="card-text">' .$row['description']. '</p>';
    echo '<a href="details.php?id='.$id. '" class="btn btn-primary">I Want</a>';

    }
  ?> 
  
    
   
     
     
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  </div>
	
  
<footer class="footer">
      <p id="copyright">Copyright © 2019 Hellen Fitness</p>

</footer>

</div>
</body>

</html>