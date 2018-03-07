<html>
<head>
  <title> Pramana Hotel Official Website </title>
  <link rel="stylesheet" type="text/css" href="pramana1.css">
  <script>
  function validateform()
  {
      var name = document.forms["myForm"]["name"].value;
      var email = document.forms["myForm"]["email"].value;
      var phone = document.forms["myForm"]["phone"].value;
      var stayindate = document.forms["myForm"]["stayindate"].value;
      var lengthofstay = document.forms["myForm"]["lengthofstay"].value;
      var roomtype = document.forms["myForm"]["roomtype"].value;

      if((name=="") || (email == "") || (phone == "") || (stayindate=="")
            || (lengthofstay==""))
      {
        alert("Please fill in all required fields!");
        return false;
      }
      if((phone.length > 12) || (phone.length <10))
      {
        alert("Please fill in correct phone number!");
        return false;
      }
      if(lengthofstay == 0)
      {
        alert("Please fill in correct Length of Stay!");
        return false;
      }
      if(roomtype == 0)
      {
        alert("Please choose a room type!");
        return false;
      }
  }
  </script>
</head>
<body>
<div class="header">
  <img src="logo2.png" width="300px" height="180px">
</div>

<div class="contenthead">
  <div class="contentheader"><a href="home.php"> HOME </a></div>
  <div class="contentheader"><a href="facility.php"> FACILITY </a></div>
  <div class="contentheader"><b>BOOK ROOM </b></div>
  <div class="contentheader hr1"> <hr> </div>
</div>
<div class="content">
<center>
<table class="table1">
<form name="myForm" action="booking.php" onsubmit="return validateform()" method="post">
  <tr>
    <td colspan="2"><center>BOOK ROOM</center> </td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="name">
  </tr>
  <tr>
    <td> Email </td>
    <td><input type="email" name="email">
  </tr>
  <tr>
    <td>Phone </td>
      <td><input type="number" name ="phone">
  </tr>
  <tr>
    <td> Stay in Date </td>
    <?php
    echo("<td>"."<input type='date' name ='stayindate' style='width:312px' min='".date("Y-m-d")."'>");
    ?>
  </tr>
  <tr>
    <td>Length of Stay (days) </td>
    <td><input type="number" name="lengthofstay">
  </tr>
  <tr>
    <td>Room Type </td>
    <td><select name="roomtype" style="width:312px">
      <option value="0"> Select One </option>
      <option value="1">Deluxe Room – $ 274</option>
      <option value="2">Deluxe Pool Villa – $438</option>
      <option value="3">1 Bedroom Pool Villa – $525</option>
      <option value="4">2 Bedroom Pool Villa - $635</option>
    </select></td>
  </tr>
  <tr>
    <td>Additional Charge</td>
    <td>
      <input type="checkbox" name="add_charge" value="1">Extra Bed - $80<br>
      <input type="checkbox" name="add_charge" value="2">Airport Shuttle - $40 <br>
      <input type="checkbox" name="add_charge" value="3">Ubud Tour 1D - $100 <br>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" value="Submit">	 </td>
  </tr>
</table>
</center>
</div>
<div class="footer" style="margin-top:200px">
  <?php include 'footer.php';?>
</div>


</body>
</html>
