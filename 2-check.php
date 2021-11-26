<?php
// (A) START SESSION 
session_start();
 
// (B) HANDLE LOGIN
if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
  // (B1) USERS & PASSWORDS - SET YOUR OWN !
   $users = [
    "akshay" => "123456",
    "ajay" => "654321",
    "aditi" => "987654"
  ];
 
  // (B2) CHECK & VERIFY
  if (isset($users[$_POST["user"]])) {
    if ($users[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
    }
  }
 
  // (B3) FAILED LOGIN FLAG
  if (!isset($_SESSION["user"])) { $failed = true; }
}
 
// (C) REDIRECT USER TO HOME PAGE IF SIGNED IN
if (isset($_SESSION["user"])) {
  header("Location: index.php"); // OWN HOME PAGE!
  exit();
}