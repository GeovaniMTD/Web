  <?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "php");  
 if(isset($_POST["employee"]))  
 {  
      $query = "SELECT * FROM employee WHERE id = '".$_POST["employee"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>