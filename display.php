<?php
include'connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <style>
        .table{
            border-radius: 10px;
            border-collapse: separate;
            justify-content: space-between;
            font-size: 20px;
            font-family:Arial;
            text-align: center;
            margin: 80px;
            /* background-color:lightblue; */
        }
        table, td, th {
          border: 1px solid black;
          border-collapse: collapse;
          
        }
        button {
            border-radius: 10px;
            width: 65px;
            height: 40px;
            font-size: 15px; 
            text-align: center;
        }
        
    </style>
</head>
<body>
    <button style="margin-left:50px;margin-top:30px;border-radius: 10px;
            width: 65px;
            height: 40px;
            font-size: 15px; 
            text-align: center;">
            <a href="students.php">Add Student</a></button>
   <div class="table">         
  <table>
  <thead>
    <tr>
      <th>SN</th>
      <th>Name</th>
      <th>Email</th>
      <th>Batch</th>
      <th>Mobile</th>
      <th>Operation</th>
    </tr>
  </thead>
<tbody>
   <?php
   $sql="select*from `students`";
   $result = mysqli_query($con,$sql) ;
   if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $batch=$row['batch'];
        $mobile=$row['mobile'];
        echo'<tr>
        <th>'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$batch.'</td>
        <td>'.$mobile.'</td>
        <td>
        <button><a href="update.php?updateid='.$id.'">Update</a></button>
        <button><a href="delete.php?deleteid='.$id.'">Delete</a></button>
        </td>
      </tr>';
    }
   }
?>

  </tbody>
</table>
</div>
</body>
</html>