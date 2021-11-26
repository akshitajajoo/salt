<?php
// (A) LOGIN CHECKS
require "2-check.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> HTML LOGIN FORM</title>
    <link rel="stylesheet" href="salt.css">

</head>
<body>

<h2>Login Form</h2>

<!-- (B) LOGIN PAGE HTML -->
<?php if (isset($failed)) { ?>
<div id="bad-login">Invalid user or password.</div>
<?php } ?>

<form action="/new/x/home.php" method="post">
  
  <div class="container">
    <label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" id="user" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
      
    <label for="Login type"><b>Login type</b></label>

    <select name="Login type" id="Login_type">
    <option value="admin">Admin</option>
    <option value="user">User</option>
   
  </select>
    
    <button type="submit" class="SubmitButton">Login</button >
  
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>

<script src = "//code.jquery.com/jquery-3.0.0.min.js"></script> <!-- add jquery library-->
<script type = "text/javascript">
$('.SubmitButton').click(function(){ // on submit button click

    var urldata = $('#Login_type :selected').val(); // get the selected  option value4
    var name = document.getElementById("user").value;
    window.open("https://akshitajajoo.github.io/salt-intern/x/"+urldata+"/"+name+"/"+urldata+"_"+name+".html") // open a new window. here you need to change the url according to your wish.
});

</script>

</body>
</html>