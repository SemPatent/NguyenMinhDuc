<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="house"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$House=$_POST["txtHouse"];
$Housesyno1=$_POST["txtHousesyno1"];
$Housesyno2=$_POST["txtHousesyno2"];
$Housesyno3=$_POST["txtHousesyno3"];
$Housesyno4=$_POST["txtHousesyno4"];
$Housesyno5=$_POST["txtHousesyno5"];
$Housesyno6=$_POST["txtHousesyno6"];
$Housesyno7=$_POST["txtHousesyno7"];
$Housesyno8=$_POST["txtHousesyno8"];
$Housesyno9=$_POST["txtHousesyno9"];
$Housesyno10=$_POST["txtHousesyno10"];




    $sql = "UPDATE $tbl_name SET House = '$House', House_syno_1='$Housesyno1', House_syno_2='$Housesyno2', House_syno_3='$Housesyno3', House_syno_4='$Housesyno4', House_syno_5='$Housesyno5'
 , House_syno_6='$Housesyno6', House_syno_7='$Housesyno7', House_syno_8='$Housesyno8', House_syno_9='$Housesyno9',House_syno_10='$Housesyno10' WHERE House='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managehouse.php");
    }
    else{
        die("ERROR EDITTING HOUSE:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managehouse.php'> <em> GO TO HOUSE </em> </a>";
    }

    mysql_close($conn);
?>
