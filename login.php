
<?php

$conn=mysqli_connect ("localhost", "root", "", "begin");

if
(isset($_POST[' submit'])) {
// echo "<pre>";
//print_r ($_POST) ;|

    $email=mysqli_real_escape_string($conn,$_POST[' email ']);
    $password=mysqli_real_escape_string($conn, $_POST['password
        ']);
    $sql=mysqli_query($conn, "select * from login where username= '$email' && password='$password'");
    $num=mysqli_num_rows($sq1);
    if ($num>0) {
        echo "found";
    }else{
    echo "Not found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f2f2f2; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">

<div class="main">
    <div class="flex">
        <div class="content">
  <div style="background-color: white; padding: 40px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); width: 300px;">
    <h2 style="text-align: center; color: #333;">Login</h2>
    <form method="post" action="">
      <label for="username" style="display: block; margin-bottom: 10px; color: #555;">Username</label>
      <div class="box">
      <input type="text" name="email"  style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 5px;"class="from-control" required>
        </div>
      <label for="password" style="display: block; margin-bottom: 10px; color: #555;">Password</label>
      <input type="password" name="password" style="width: 100%; padding: 10px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 5px;" class="from-control" required>
        </div>
      <button type="submit" name="submit" style="width: 100%; padding: 10px; background-color:rgb(215, 76, 76); color: white; border: none; border-radius: 5px; cursor: pointer;">Login</button>
        </div>    
    </form>
    </div>
</div>
  </div>

</body>
</html>