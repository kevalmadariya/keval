<?php include 'config.php';
if(isset($_POST['submit'])){
       
    $name=$_POST['name'];
    $mname=$_POST['mname'];
    // $branch = $_POST['branch'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
  echo $name;
    echo $name;    
    $res="insert into user_info (name,email,password,mname) values('$name','$email','$pass','$mname')";
$bool= mysqli_query($con,$res);
if($bool){
   ?>
 <script>
    alert("INSERT DATA PROPERLY");
</script>
   <?php
}else{
?>
<script>
   alert("not done");
</script>
  <?php

}
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
</head>
<body>
    <h1>REGISTER </h1>
    <form  method="post">
        NAME::
        <input  type="text"  id="name" name="name" placeholder="only first name" value=""></input>
        <br>
        MIDDEL NAME::
        <input  type="text"  id="mname" name="mname" placeholder="only MIDDEL name" value=""></input>
        <br>
         EMAIL::
        <input type="email" id="email" name="email" placeholder="Enter your email" value=""></input>
        <br>
         PASSWORD::
         <input type="text" id="pass" name="pass" placeholder="GENRATE password" value=""></input>
         <br>
         <input type="submit" id="submit" name="submit" value="Register">

    </form>

<?php
  ?>

</body>
</html>