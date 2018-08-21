<?php  
 if(isset($_POST["employee"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "php");  
      $query = "SELECT * FROM employee WHERE id = '".$_POST["employee"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>HWID</label></td>  
                     <td width="70%">'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Programas Liberados</label></td>  
                     <td width="70%">'.$row["address"].'</td>  
                </tr>               
                <tr>  
                     <td width="30%"><label>DATA</label></td>  
                     <td width="70%">'.$row["designation"].'</td>  
                </tr>  
               
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>