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
$sql = "SELECT P_id,P_name,P_UserName FROM patient,permissions WHERE patient.P_id=permissions.P_CID"

;
$stmt = $conn->prepare($sql);
$stmt->execute();
?>

<table width="600" border="1">
  <tr>
    <th width="90"> <div align="center">รหัสคนไข้ </th>
    <th width="140"> <div align="center">ชื่อคนไข้</th>
    <th width="140"> <div align="center">อีเมลล์</th>
    
  </tr>

<?php
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>

  <tr>
    <td>  
    
        <?php echo $result["P_id"]; ?>
         
    </td>

    <td>
    <a href="detail.php?P_name=<?php echo $result ["P_name"];?>">
    <?php echo $result["P_name"]; ?>
        
    </td>
    <td>
        <?php echo $result["P_UserName"]; ?>
    </td>

    
    
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