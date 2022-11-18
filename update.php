<?php
include'connect.php';
$id=$_GET['updateid'];
$sql = "Select * from `students` where id =$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$batch=$row['batch'];
$mobile=$row['mobile'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $batch=$_POST['batch'];
    $mobile=$_POST['mobile'];

$sql="update `students` set id=$id,name='$name',email='$email',batch='$batch',mobile='$mobile'where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('Location:display.php');
}else{
    die(mysqli_error($con));
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <style>
       *{
        padding:8px;

       }
        .form1 {
            border: 5px solid navy;
            border-radius: 10px;
            /* padding: 20px; */
            justify-content: space-between;
            margin-left: 23%;
            margin-top: 10%;
            width: 600px;
            height: 400px;
            font-size: 20px;
            font-family:Arial;
            text-align: center;
            color: black;
            background-color:lightblue;
            
        }
        button {
            border-radius: 10px;
            width: 65px;
            height: 40px;
            font-size: 10px; 
        }
    </style>
</head>
<body>
    
<div class="form1">
    <form method="POST">
    <h3 style="color:blue;text-align:center;">Want to update your information!</h3>
      <label>Name:</label></br><input type="text" placeholder="Enter your full name." name="name" autocomplete="off"value=<?php echo $name ;?>></br>
      <label> Email:</label></br><input type="email" placeholder="Enter Your Email" name="email" autocomplete="off"value=<?php echo $email;?>></br>
      <label> Batch:</label></br><input type="text" placeholder="Enter Your Batch" name="batch" autocomplete="off"value=<?php echo $batch;?>></br>
      <label> MobileNo:</label></br><input type="number" placeholder="Mobile Number" name="mobile" autocomplete="off"value=<?php echo $mobile;?>></br>
    </br>
      <button type="submit"name="submit">UPDATE</button>
    </form> 
</div>
</body>
</html>
