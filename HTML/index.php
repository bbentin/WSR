<!DOCTYPE html>
<html>

<body>

<?php
$con = mysqli_connect("db1","root","venko","info_host",3306);
$result = mysqli_query($con,"SELECT * FROM dados ORDER BY id DESC LIMIT 1");
$data = $result->fetch_all(MYSQLI_ASSOC);
  foreach($data as $row):
    endforeach
?>


<h2>Container:</h2> <p>Server1</p> <br>


    <h2> Uso da CPU:</h2><p> <?php echo $row['cpu'];?>%</p><br>
    <h2> Memoria:</h2><p><?php echo $row['memoria'];?>GB</p><br>
    <h2> Timestamp da coleta:</h2> <p><?php echo $row['data'];?></p><br>
    <h2> IP do host:</h2> <p><?php echo $row['ip'];?></p><br>
    
</body>
</html>
