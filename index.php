<?php

$uname = $_GET['uname'];
$pass = $_GET['pass'];

$makeconnect = mysqli_connect("localhost","root",'','18bce2373');
if (!$makeconnect){
  die("Connection to the database failed".mysqli_connect_error());
}

$query="SELECT * FROM details where username='$uname' AND password='$pass'";
$bunny = mysqli_query($makeconnect,$query);
$validate = mysqli_fetch_array($bunny);

if(isset($validate)){
    echo "<script>location.href='success1.html'</script>";     
}
else{
    echo '<script>alert("INVALID CREDENTIALS. PLEASE TRY AGAIN.")</script>'; 
}

?>

<html>
<head>
<title>Parth Sachan | 18BCE2373</title> 
<style>
    body{
        background-color: #FC8EAC;
        }
</style>
</head>
<body>
<h1>Login Interface by Parth Sachan 18BCE2373</h1>
<form>
    <label for="uname">Enter your Username:</label>
    <input type="text" name="uname" value = "<?php if (array_key_exists('uname', $_GET)) {
    echo $_GET['uname'];  
 }
 ?>"><br><br>
      <label for="pass">Enter the Password:</label>
    <input type="text" name="pass" value = "<?php if (array_key_exists('pass', $_GET)) {
    echo $_GET['pass'];
}
?>"><br><br>                                                            
<button type="submit">Submit</button>
</form>
</body>
</html>