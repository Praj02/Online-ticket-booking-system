<?php
$username = $_POST['username'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$city = $_POST['city'];
$password = $_POST['pswd'];

if (!empty($username) || !empty($mobileno) || !empty($email) || !empty($city) || !empty($password))
{
    // $host = "localhost";
    // $dbusername = "root";
    // $dbpassword = "";
    // $dbname = "reglog";

    //creating connection
    $conn = new mysqli('localhost', 'root', '', 'reglog');

    if (mysqli_connect_error())
    {
        die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT = "SELECT email From register Where email = ? Limit 1";
        $INSERT = "INSERT Into register (username, mobileno, email, city, password) values(?, ?, ?, ?, ?)";

        //preparing statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum = $stmt->num_rows;

        if($rnum == 0)
        {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sisss", $username, $mobileno, $email, $city, $password);
            $stmt->execute();

            echo "You have been successfully registered!";
            echo "<a href='login.html' target='_blank'>Login</a>";
        }
        else{
            echo "The email ID you entered is already used. Please register with another email ID";
        }
        $stmt->close();
        $conn->close();
    }
}
else
{
    echo "All fields are required.";
    die();
}
?>