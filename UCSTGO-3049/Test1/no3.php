<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            
            box-sizing: border-box;
        }
        
        table{
          width: 100%;
          max-width: 400px;
          text-align: center;
          border-collapse: collapse;
        }
        tr,td{
            border: 1px solid #111;
        }
    </style>
</head>
<body>
<?php
echo "<table>";
for($i=1;$i<=10;$i++){
    echo "<tr>";
    for($j=1;$j<=10;$j++){
        $res=$i*$j;
        echo "<td>$res</td>";
    }
    echo "</tr>";
  
}
echo "</table>";
?>
</body>
</html>