<?php
    //  session_start();
    //  $message="";
    //  if(count($_POST)>0) 
    //  {
    //    include_once "connection.php";
    //    $result=mysqli_query($con, "SELECT * FROM register WHERE username='".$_POST["username"]."' and password='".$_POST["pswd"]."'");
    //    $row=mysqli_fetch_array($result);
    //    if(is_array($row))
    //    {
    //      $_SESSION["username"]=$row["username"];
    //      $_SESSION["pswd"]=$row["pswd"];
    //    }
    //    else
    //    {
    //      $message="Invalid Username or Password";
    //    }
    //  }
    //  if(isset($_SESSION["username"]))
    //  {
    //    header("location:home.html");
    //  }
    if($_POST)
    {
        include "connection.php";
        $username=$_POST['username'];
        $password=$_POST['pswd'];
        $query = "SELECT * FROM register WHERE username='$username' and password='$password'";
        $result=mysqli_query($con, $query);
        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['auth']='true';
            header('location:home.php');
        }
        else{
            echo 'Incorrect username or password.';
        }
    }
    ?>