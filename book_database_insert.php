<?php
$connect = mysqli_connect("localhost","root","","pramanahotel");
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$stayindate = $_POST["stayindate"];
$lengthofstay = $_POST["lengthofstay"];
$roomtype = $_POST["roomtype"];
$addcharge1 = $_POST["addcharge1"];
$addcharge2 = $_POST["addcharge2"];
$addcharge3 = $_POST["addcharge3"];

$sql = "INSERT INTO booking
(name,email,phone,stayindate,lengthofstay,roomtype,addcharge1,addcharge2,addcharge3) VALUES
('$name','$email','$phone','$stayindate','$lengthofstay','$roomtype','$addcharge1','$addcharge2','$addcharge3')";
if (mysqli_query($connect, $sql)) {
    header("Location: booking.php");
}
?>
