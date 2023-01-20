<?php
require "connect.php";
if (isset($_GET["P_name"]));
{
    $strP_name = $_GET ["P_name"];
    echo "<br>"."strP_name =".$strP_name;
    $sql="SELECT * FROM patient,premissions where P_name LIKE '%" .$strP_name."%'";
    echo "<br>"."sql=".$sql."<br>";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    //print_r($result);    
}
?>
    <table width="300"border="1">
  <tr>
    <th width="325">ชื่อคนไข้</th>
    <td width="240"><?php echo $result["P_name"]; ?></td>
  </tr>

  <tr>
    <th width="130">ยอดหนี้</th>
    <td><?php echo $result["P_debt"]; ?></td>
  </tr>
 
  <tr>
    <th width="130">อีเมลล์</th>
    <td><?php echo $result["P_UserName"]; ?></td>
  </tr>
  
  </table>
<?php
$conn = null;
?>