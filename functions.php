<?php
function categoryDropDown() {
echo "<select size='1' name='categeory_id'>";
echo "<option value='' >--Choose--</option>";  
$sql ="SELECT * FROM category where status=1 ORDER BY name ASC";
   include('connection.php');
   $qry = mysqli_query($conn, $sql) or die (mysqli_error($conn));
   if($qry)
   {
       while($row=mysqli_fetch_array($qry))
       {
           echo "<option value=".$row['id'].">".strtoupper($row['name'])."</option>";
       }
   }
echo "</select>";
}
?>