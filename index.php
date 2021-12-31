<?php

require_once __DIR__ . "/database.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-1/css/all.min.css" integrity="sha512-wDB6AYiYP4FO5Sxieamqy9wtpAY3qdHMqlhZecIEUu1YjkLw5gQf/4ZDgOzmCBAF5SheMjmugkpUSVoUrGbLkQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="css/style.css">
  <title>Dischi PHP</title>
</head>
<body>
  
    <header>
      
    </header>
    <div class="fc-container">
       <?php 
        //  var_dump($dischi)  
        for($i=0; $i<count($dischi); $i++) {  ?>
         <div class="card-container">
              <div class="img-container">
                 <img src=
                 <?php echo $dischi[$i]['poster']?> alt="poster">
               </div> 
    
              <div class="text-container">
                  <h3> <?php echo $dischi[$i]['title'] ?> </h3>
                  <p> <?php echo $dischi[$i]['author'] ?></p>
                  <p> <?php echo $dischi[$i]['genre'] ?></p>
              </div>
        </div>
      <?php } ?>   

    </div>

</body>
</html>