<!--подключение-->
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tour";
$conn = new mysqli($servername, $username, $password, $dbname);

include "header.php";
// Получение списка товаров из базы данных
if ($_SERVER["REQUEST_METHOD"] == "GET") {
 $search_query = $_GET["q"];
 $sql = "SELECT * FROM products WHERE name LIKE 
'%$search_query%' AND `hotel` !='' " ;
 $result = $conn->query($sql);
}

?>

 <?php while ($row = $result->fetch_assoc()) { ?>
<section class="search">
  <div class="coli">
  <div class="rowi">
				
      
 <input type="hidden" value="%s" name="name"> 
   <p><a href="product.php"> <?php echo $row["name"]; ?></a></p>
    <hr>
   <p> <?php echo $row["hotel"]; ?></p>
  
   <h4> от <?php echo $row["price"]; ?> р.</h4>
   <a href="order.php" style="-webkit-text-stroke: 0.7px rgba(2, 48, 192, 1); 
		color: #fff;font-family: Montserrat Alternates;	">Забронировать</a>
</div>
 </div>
</section>
 <?php
 }?>