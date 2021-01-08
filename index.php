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
<table>
<thead>
    <tr>
      <th>Player Name</th>
      <th>Country</th>
      <th>Age</th>
    </tr>
</thead>
<tbody>
<?php
while($row = $result->fetch_assoc())
{?>
    <tr>
      <td><?= $row['username']; ?></td>
      <td><?= $row['country'];?></td>
      <td><?= $row['age']; ?></td>
    </tr>
<?php }?>
</tbody>
</table>
  <br><br>

<?php
$sql = "SELECT * FROM manager";
$result = $mysqli->query($sql);
?>

  <table>
    <thead>
    <tr>
      <th>Manager Name</th>
      <th>Country</th>
      <th>Age</th>
    </tr>
    </thead>
    <?php while($row= $result->fetch_assoc()){?>
      <tbody>
        <tr>
          <td><?= $row['username'];?></td>
          <td><?= $row['country'];?></td>
          <td><?= $row['age'];?></td>
        </tr>
      </tbody>

    <?php };?>
  </table>
</body>
</html>