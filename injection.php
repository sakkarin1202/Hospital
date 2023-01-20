<?php
require "connect.php";
echo "<br>"."strP_name =".$strP_name;
if (isset($_GET["P_name"]));
{
    $strP_name = $_GET [P_name];
    echo "<br>"."strP_name =".$strP_name;
    $sql="SELECT * FROM patient,premissions where CustomerID ='".$strP_name."'";
    echo "<br>"."sql=".$sql."<br>";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    //print_r($result);    
}
?>
    <table width="300"border="1">
  <tr>
    <th width="325">รหัสลูกค้าสมาชิก</th>
    <td width="240"><?php echo $result["CustomerID"]; ?></td>
  </tr>

  <tr>
    <th width="130">ชื่อ</th>
    <td><?php echo $result["Name"]; ?></td>
  </tr>
 
  <tr>
    <th width="130">Birthdate</th>
    <td><?php echo $result["Birthdate"]; ?></td>
  </tr>
  
  <tr>
    <th width="130">Email</th>
    <td><?php echo $result["Email"]; ?></td>
  </tr>

  <tr>
    <th width="130">CountryCode</th>
    <td><?php echo $result["CountryCode"]; ?></td>
  </tr>

  <tr>
    <th width="130">OutstandingDebt</th>
    <td><?php echo $result["OutstandingDebt"]; ?></td>
  </tr>
  </table>
<?php
$conn = null;
?>