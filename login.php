<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>login </h1>
    <form method="post">
        <!-- NAME:: -->
        <!-- <input  type="text"  id="name" name="name" placeholder="only first name" value=""></input> -->
        <!-- <br> -->
         EMAIL::
        <input type="email" id="email" name="email" placeholder="Enter your email" value=""></input>
        <br>
         PASSWORD::
         <input type="text" id="pass" name="pass" placeholder="Enter your password" value=""></input>
         <br>
         RE PASSWORD::
         <input type="password" id="repass" name="repass" placeholder="Re-enter password" value=""></input>
         <br>
         <input type="submit" id="submit" name="submit" value="login">
    </form>
</body>
</html>
<?php 
       if(isset($_POST['submit'])){
       
        // $name=$_POST['name'];
        // $mname=$_POST['mname'];
        // $branch = $_POST['branch'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $rpass=$_POST['repass'];
    
        // echo $name;    
    // $bool= mysqli_query($con,$res);
    if($pass==$rpass){
        $sel_query="select * from user_info where email='$email'";
        if($res=mysqli_query($con,$sel_query)){
            $select=mysqli_fetch_row($res);
             $real_pass=$select['password'];
             if($real_pass==$pass){
                $_SERVER['index.php'];
             }
        }else{
            ?>
           <script>
            alert("your have no account");
         </script>
        <?php
        }
        

        $res=mysqli_query($con,$select);

    }else{
        ?>
           <script>
            alert("your passwort and repassword are not matchinsg");
         </script>
        <?php
    }
    
}
  ?>