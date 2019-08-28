<!DOCTYPE html>
<html lang="en">
<head>
<title>ATN Toy Company</title>
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
  height: 100px;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
form {
  box-sizing: border-box;
  width: 260px;
  margin: 100px auto 0;
  box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.2);
  padding-bottom: 40px;
  border-radius: 3px;
}
form h1 {
  box-sizing: border-box;
  padding: 20px;
}

input {
  margin: 40px 25px;
  width: 200px;
  display: block;
  border: none;
  padding: 10px 0;
  border-bottom: solid 1px #1abc9c;
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #1abc9c 4%);
  background-position: -200px 0;
  background-size: 200px 100%;
  background-repeat: no-repeat;
  color: #0e6252;
}
input:focus, input:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}
input:focus::-webkit-input-placeholder, input:valid::-webkit-input-placeholder {
  color: #1abc9c;
  font-size: 11px;
  transform: translateY(-20px);
  visibility: visible !important;
}

button {
  border: none;
  background: #1abc9c;
  cursor: pointer;
  border-radius: 3px;
  padding: 6px;
  width: 200px;
  color: white;
  margin-left: 25px;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.2);
}
button:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 6px 0 rgba(0, 0, 0, 0.2);
}
</style>
</head>
<body>
<header>
  <div class = "bg"> <img src="coverbackground.jpg" alt="Sandwich" style="width:100%"></div>

</header>

<section >
  <nav style=" height: 800px">
    <form action="signinprocess.php" method="POST">
      <h1>Login</h1>
      <input placeholder="Username" type="text" name ="userid" required="">
      <input placeholder="Password" type="password" name = "pass" required="">
      <button> Login</button> 
    </form>
  </nav>
  
  <article style=" height: 800px" >
    

    <?php
    require_once'./database.php';
      $sql1 = "select id, productname, price, detail, img from product
      Where id = '1'";
      $sql2 = "select id, productname, price, detail, img from product
      Where id = '2'";
      $sql3 = "select id, productname, price, detail, img from product
      Where id = '3'";
      $sql4 = "select id, productname, price, detail, img from product
      Where id = '4'";
      $sql5 = "select id, productname, price, detail, img from product
      Where id = '5'";
      $sql6 = "select id, productname, price, detail, img from product
      Where id = '6'";
      $sql7 = "select id, productname, price, detail, img from product
      Where id = '7'";
      $sql8 = "select id, productname, price, detail, img from product
      Where id = '8'";
      $stmt1 = $pdo->prepare($sql1);
      $stmt1->execute(); 
      $arr1 =  $stmt1->fetch(PDO::FETCH_ASSOC);

      $stmt2 = $pdo->prepare($sql2);
      $stmt2->execute(); 
      $arr2 =  $stmt2->fetch(PDO::FETCH_ASSOC);

      $stmt3 = $pdo->prepare($sql3);
      $stmt3->execute(); 
      $arr3 =  $stmt3->fetch(PDO::FETCH_ASSOC);

      $stmt4 = $pdo->prepare($sql4);
      $stmt4->execute(); 
      $arr4 =  $stmt4->fetch(PDO::FETCH_ASSOC);

      $stmt5 = $pdo->prepare($sql5);
      $stmt5->execute(); 
      $arr5 =  $stmt5->fetch(PDO::FETCH_ASSOC);

      $stmt6 = $pdo->prepare($sql6);
      $stmt6->execute(); 
      $arr6 =  $stmt6->fetch(PDO::FETCH_ASSOC);

      $stmt7 = $pdo->prepare($sql7);
      $stmt7->execute(); 
      $arr7 =  $stmt7->fetch(PDO::FETCH_ASSOC);

      $stmt8 = $pdo->prepare($sql8);
      $stmt8->execute(); 
      $arr8 =  $stmt8->fetch(PDO::FETCH_ASSOC);
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
      <th>
        <img src= " <?php echo $arr4['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr4['productname']?> </span></br>
        <span><?php echo $arr4['price']; ?></span>
      </th>      
    </tr>
    <tr>
      <th>
        <img src= " <?php echo $arr5['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr5['productname']?> </span></br>
        <span><?php echo $arr5['price']; ?></span>
      </th>
      <th>
        <img src= " <?php echo $arr6['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr6['productname']?> </span></br>
        <span><?php echo $arr6['price']; ?></span>
      </th>
      <th><img src= " <?php echo $arr7['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr7['productname']?> </span></br>
        <span><?php echo $arr7['price']; ?></span>
      </th>
      <th>
        <img src= " <?php echo $arr8['img']; ?>" style="width: 200 px; height: 250px" alt="placeholder+image"></br>
        <span> <?php echo $arr8['productname']?> </span></br>
        <span><?php echo $arr8['price']; ?></span>
      </th>
    </tr>
</table>
  </article>
</section>
</body>
<footer>
  <p>ATN Company</p>
</footer>

</html>