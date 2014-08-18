<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="nice"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Nice=$_POST["txtNice"];
$Nicesyno1=$_POST["txtNicesyno1"];
$Nicesyno2=$_POST["txtNicesyno2"];
$Nicesyno3=$_POST["txtNicesyno3"];
$Nicesyno4=$_POST["txtNicesyno4"];
$Nicesyno5=$_POST["txtNicesyno5"];
$Nicesyno6=$_POST["txtNicesyno6"];
$Nicesyno7=$_POST["txtNicesyno7"];
$Nicesyno8=$_POST["txtNicesyno8"];
$Nicesyno9=$_POST["txtNicesyno9"];
$Nicesyno10=$_POST["txtNicesyno10"];
$Nicesyno11=$_POST["txtNicesyno11"];
$Nicesyno12=$_POST["txtNicesyno12"];





$sql = "UPDATE $tbl_name SET Nice = '$Nice', Nice_syno_1='$Nicesyno1', Nice_syno_2='$Nicesyno2', Nice_syno_3='$Nicesyno3', Nice_syno_4='$Nicesyno4', Nice_syno_5='$Nicesyno5'
 , Nice_syno_6='$Nicesyno6', Nice_syno_7='$Nicesyno7', Nice_syno_8='$Nicesyno8', Nice_syno_9='$Nicesyno9', Nice_syno_10='$Nicesyno10', Nice_syno_11='$Nicesyno11', Nice_syno_12='$Nicesyno12'
   WHERE Nice='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managenice.php");
    }
    else{
        die("ERROR EDITTING NICE:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managenice.php'> <em> GO TO NICE </em> </a>";
    }

    mysql_close($conn);
?>
