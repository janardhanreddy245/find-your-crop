<html>
<style>
body{
    background-image:url('<?php echo "crop3.jpg" ?>');
    background-repeat: no-repeat;
  background-size: cover;
}
k{
width:100px;
font-size:50px;
color:red;
}
k1{
    width:120px;
    font-size:80px;
    color:black;
    font-style:italic;
    flex-wrap:wrap;
    text-align:right;
    
}

</style>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";
$sea=$_POST['season'];
$so=$_POST['soil'];
$tp=$_POST['time'];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT crop FROM bye WHERE season='$sea' and timeperiod='$tp' and soil='$so' ";
$result = $conn->query($sql);
if ($result->num_rows > 0)  {
    
  while($row = $result->fetch_assoc()) {
    echo "<k1>crop: " . $row["crop"].  "</k1><br>";
  }
} 
else{
    echo "bye"; 
}
$conn->close();
?>
</body>
</html>