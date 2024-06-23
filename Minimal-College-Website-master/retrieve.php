<?php
error_reporting(0);
$con=mysqli_connect("localhost","dbuser","password","admin");
if(!$con){ 
  die('Could not connect: '.mysqli_connect_error()); 
}

$query="SELECT * FROM STUDENTS";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
?>
<table>
    <tr>
        <th>--------NAME--------------</th>
        <th>--------------EMAIL--------------------</th>
        <th>PHONE NO</th>
    </tr>


<?php
while($result=mysqli_fetch_assoc($data))
{
    echo "<tr>
         <td>".$result['NAME']."--"." </td>
         <td>".$result['EMAIL']."--"." </td>
         <td>".$result['PHONE NO']."</td>
         </tr>";
}
?>
</table>
