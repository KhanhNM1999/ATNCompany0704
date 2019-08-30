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
    <form action="login.php" method="POST">
      <h1>Login</h1>
      <input placeholder="Username" type="text" name ="username" required="">
      <input placeholder="Password" type="password" name = "password" required="">
      <button> Login</button> 
    </form>
  </nav>
  
  <article style=" height: 800px" >

// db của xampp là mysql
của thằng pg là pg   
t gửi cho m cái link git của t xog m lm ok // cũng đc... nản vl rồi
t thấy đây m đi cop code cmnr :v bố tự làm đấy. cop cc
connect đơn giản đéo ai lm như m :)) thôi kệ đi, t làm theo m cx đc, tí t xin cái link :'('  
đọc cẩn thận ko tầu hỏa nhập ma
https://github.com/PhanNgocHoang/ass2
slide của t cho n cx dài lắm r

    <?php
    require_once'./database.php';
    /*
      $sql1 = "select id, productname, price, detail, img from product
      Where id = '1'";//đéo ai lấy infor product kiểu này dài bỏ mẹ. thế lấy kiểu gì thì ngắn hơn ? cho t ví dụ phát. @@
      // m lấy tất infor ra xog m đổ n ra 1 cái bảng n sẽ tự tăng giảm số dòng theo dữ liệu của m. Một câu code ví dụ đi, ui dmd t đau bụng, t đi vệ sinh, hứa sẽ nhanh, đừng bỏ t đm T_T 
      //xem cái ảnh t gửi xem n ngắn hơn bao nhiêu lần t nghĩ n ngắn hơn theo số lượng sản phẩm của m.
      // ok để h t xem
      // nhưng mà làm sao để tr td nó tự tăng khi mà mình add thêm sản phẩm ?
      // m thấy t echo ra thông tin mỗi cột n sẽ là 1 thông tin vì m đã lấy hết thông tin của sản phẩm ra r nên nó sẽ tự động tăng giảm, m thấy in vào một cột bất kỳ n sẽ lấy hết 1 loại thông tin đổi tất vào cột ý cho đến khi nào hết thì thoy cái này từ đợt lm web r
      // ko tin thì m thử đi đéo ai mỗi sản phẩm 1 truy vấn để vỡ mồm ak

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
    */
    $sql = "select * from product" //đã * r thì cần j mấy cái kia - t bỏ cái detail. thôi cứ test cái này đã, tí bỏ sau cx đc
    $result = $pdo->query($sql);
    while ($row = $result->fetch(PDO::FETCH_ASSOC))
    {
      echo "<tr>";
      echo "<td>".row['id']."</td>";
      echo "<td>".row['productname']."</td>";
      echo "<td>".row['price']."</td>";
      echo "<td>".row['detail']."</td>";
      echo "<td>".row['img']."</td>";
      echo "</tr>";
    } //run thử
    // :v đó là lỗi từ hôm đến h đấy
  ?>
  </article>
</section>
</body>
<footer>
  <p>ATN Company</p>
</footer>

</html>