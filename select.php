<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>020 ศักดิ์กรินทร์ รอดจิต</title>
</head>
<body>
    
<?php
require "connect.php";
$sql = "SELECT * 
FROM patient,permissions 
WHERE patient.P_id = permissions.P_CID
AND P_debt between  1000 AND 3000";
$stmt = $conn->prepare($sql);
$stmt->execute();
?>
<table width="800" border="1">
  <tr>
    <th width="90"> <div align="center">P_id </th>
    <th width="140"> <div align="center">P_name </th>
    <th width="70"> <div align="center">P_debt </th>
    <th width="100"> <div align="center">Email </th>
  </tr>

<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>

  <tr>
    <td>   
        <?php echo $result["P_id"]; ?>
         
    </td>

    <td>
        <?php echo $result["P_name"]; ?>
    </td>

    <td><?php echo $result["P_debt"]; ?></td>
    <td><?php echo $result["P_Username"]; ?></div></td>
    
    
  </tr>

<?php
  }
?>

</table>

<?php
$conn = null;
?>

</body>
</html>