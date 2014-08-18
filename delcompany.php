<?php

    $id = $_GET['id'];

    $sqlhost ="127.0.0.1"; // Host name
    $sqlusername ="root"; // Mysql username
    $sqlpassword =""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="company"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    $sql = "DELETE FROM $tbl_name WHERE Company='$id' ";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managecompany.php");
    }
    else{
        die("ERROR DELETING COMPANY:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo " <a href='managecompany.php'> <em> GO TO ADMIN ACCOUNT </em> </a>";
    }

    mysql_close($conn);
?>
