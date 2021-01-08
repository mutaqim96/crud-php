<?php 
$mysqli = new mysqli("localhost","root","abc123","football");
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table, th,td{
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>
<body>

<?php
  //buat satu variable isi query string
  $sql = "SELECT * FROM player";
  //Kita nak access query function daripada $mysqli object. Untuk execute sql query tadi
  $result = $mysqli->query($sql);

  //vardump() nak tengok isi result. mcm echo.
  //var_dump($result);
  //$row = $result->fetch_assoc();
  //var_dump($row);

  //tapi ni baru satu row. sebab tu kita kene buat table.
?>

<br>
<br>


  
</body>
</html>