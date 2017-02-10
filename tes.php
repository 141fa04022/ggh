<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$name = $_GET['name'];
// $uname = $_POST['uname'];
// $age = $_POST['age'];
// $pswd = $_POST['pswd'];




// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from log where name = '$name'";
// $sql="insert into log(name,uname,age,pswd)
// values ('$name','$uname','$age','$pswd')";
$result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result)>0) {
// 	echo "inserted";
// 	# code...
// }

if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
      	$name = $row["name"];
      	$uname=$row["uname"];

//        //echo "<form><input type="text" name="name" value=$row["uname"]/><form/>" ."uname" ."<br/>";

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<html>
<body>
<div class="container">

<form>
Details:<br>
<div class="row">
Name:<input type="text" name="name" value="<?php echo $name ?>" />
Username:<input type="text" name="name" value="<?php echo $uname ?>" />
</div>
</form>
</body>
</html>
