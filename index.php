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
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<header>
  <div class = "bg"> <img src="coverbackground.jpg" alt="Sandwich" style="width:100%"></div>

</header>

<section >
  <nav style=" height: 800px">
    <form action="login.php" method="POST">
      <h1>Login</h1>
      <input placeholder="Username" type="text" name ="username" required="">
      <input placeholder="Password" type="password" name = "password" required="">
      <button> Login</button> 
    </form>
  </nav>
   <article style=" height: 800px" >
  <table>
    <tr>
      <td>id</td>
      <td>productname</td>
      <td>price</td>
      <td>detail</td>
      <td>img</td>
    </tr>
  <?php
    header('Content-Type: images/jpg');
    require_once "database.php";
    $sql = "select * from product";
    $result = $pdo->query($sql);
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
      
      echo "<tr>";
      echo "<td>".$row['img']."</td>";
      echo "<td>".$row['id']."</td>";
      echo "<td>".$row['productname']."</td>";
      echo "<td>".$row['price']."</td>";
      echo "<td>".$row['detail']."</td>";
      echo "</tr>";
    } 
    //cái ảnh t chưa tìm hiểu của post t nghĩ bỏ cái ảnh đi n còn nhiều vấn đề đi theo lắm
    //vs cả m n3n lm 1 trang login vs 1 trang admin ri3ng de nhu nay thi can j login... ok
    // lm front end di con server lm dk den dau thi lm ko thi check qua code cua t @@ ok
    // m ko bao t som t lm xog t da qua cho may cai tinh nang nho thi 1 buoi. OK the t lam day, co gi t hoi m sau, thank m
  ?>
  </table>
  </article>
</section>
</body>
<footer>
  <p>ATN Company</p>
</footer>

</html> 