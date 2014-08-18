<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="big"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Big=$_POST["txtBig"];
$Bigsyno1=$_POST["txtBigsyno1"];
$Bigsyno2=$_POST["txtBigsyno2"];
$Bigsyno3=$_POST["txtBigsyno3"];
$Bigsyno4=$_POST["txtBigsyno4"];
$Bigsyno5=$_POST["txtBigsyno5"];
$Bigsyno6=$_POST["txtBigsyno6"];
$Bigsyno7=$_POST["txtBigsyno7"];
$Bigsyno8=$_POST["txtBigsyno8"];





    $sql = "UPDATE $tbl_name SET Big = '$Big', Big_syno_1='$Bigsyno1', Big_syno_2='$Bigsyno2', Big_syno_3='$Bigsyno3', Big_syno_4='$Bigsyno4', Big_syno_5='$Bigsyno5'
 , Big_syno_6='$Bigsyno6', Big_syno_7='$Bigsyno7', Big_syno_8='$Bigsyno8' WHERE Big='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managebig.php");
    }
    else{
        die("ERROR EDITTING BIG:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managebig.php'> <em> GO TO BIG </em> </a>";
    }

    mysql_close($conn);
?>
