<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.bg {
  /* The image used */
	background-image: url("coverbackground.jpg");
  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<header>
  <div class = "bg"> <img src="coverbackground.jpg" alt="Sandwich" style="width:100%"></div>

</header>

<section>
  <nav>
    <ul>
      <li><a href=" ">Login</a></li>
      <li><a href=" ">Registration</a></li>
      <li><a href=" ">Contact</a></li>
    </ul>
  </nav>
  
  <article>
    

    <?php
    require_once'./database.php';
      $sql1 = "select id, productname, price, detail, img from product
      Where id = '1'";
      $sql2 = "select id, productname, price, detail, img from product
      Where id = '2'";
      $sql3 = "select id, productname, price, detail, img from product
      Where id = '3'";
      $stmt1 = $pdo->prepare($sql1);
      $stmt1->execute(); 
      $arr1 =  $stmt1->fetch(PDO::FETCH_ASSOC);

      $stmt2 = $pdo->prepare($sql2);
      $stmt2->execute(); 
      $arr2 =  $stmt2->fetch(PDO::FETCH_ASSOC);

      $stmt3 = $pdo->prepare($sql3);
      $stmt3->execute(); 
      $arr3 =  $stmt3->fetch(PDO::FETCH_ASSOC);
    ?>
<table>
  
    <tr>
      <th>
        <img src= " <?php echo $arr1['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr1['productname']?> </span></br>
        <span><?php echo $arr1['price']; ?></span>
      </th>
      <th>
        <img src= " <?php echo $arr2['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr2['productname']?> </span></br>
        <span><?php echo $arr2['price']; ?></span>
      </th>
      <th>
        <img src= " <?php echo $arr3['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr3['productname']?> </span></br>
        <span><?php echo $arr3['price']; ?></span>
      </th>
      
    </tr>
    <tr>
      <th></th>
      <th></th>
      <th></th>
    </tr>
  

</table>
  </article>
</section>

<footer>
  <p>ATN Company</p>
</footer>

</body>
</html>