<?php

$username=$_POST["username"];
$password=$_POST["password"];

if(empty($username) || empty($password))
{
    header("location:welcome.php");
}
else{

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="lab"; // Database name
    $tbl_name="accountstb"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // To protect MySQL injection
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    $sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'and acctype='admin'";

    $result=mysql_query($sql);

    //
    if(!$result){
        die("ERROR CHECKING DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    //
    $count=mysql_num_rows($result);

    // If result matched username and password, table row must be 1 row
    if($count==1){

        session_start();

        // Register $myusername, $mypassword and redirect
        $_SESSION['username'] = $username;
        header("location:home.php");
    }
    else{
        echo "WRONG USERNAME OR USERNAME. PLEASE <a href='welcome.php'> <em>LOG IN</em></a> AGAIN";
    }

    mysql_close($conn);
}

?>
