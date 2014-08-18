<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="strong"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Strong=$_POST["txtStrong"];
$Strongsyno1=$_POST["txtStrongsyno1"];
$Strongsyno2=$_POST["txtStrongsyno2"];
$Strongsyno3=$_POST["txtStrongsyno3"];
$Strongsyno4=$_POST["txtStrongsyno4"];
$Strongsyno5=$_POST["txtStrongsyno5"];
$Strongsyno6=$_POST["txtStrongsyno6"];
$Strongsyno7=$_POST["txtStrongsyno7"];
$Strongsyno8=$_POST["txtStrongsyno8"];
$Strongsyno9=$_POST["txtStrongsyno9"];
$Strongsyno10=$_POST["txtStrongsyno10"];
$Strongsyno11=$_POST["txtStrongsyno11"];




    $sql = "UPDATE $tbl_name SET Strong = '$Strong',Strong_syno_1='$Strongsyno1',Strong_syno_2='$Strongsyno2',Strong_syno_3='$Strongsyno3',Strong_syno_4='$Strongsyno4',Strong_syno_5='$Strongsyno5'
 ,Strong_syno_6='$Strongsyno6',Strong_syno_7='Strongsyno7',Strong_syno_8='$Strongsyno8',Strong_syno_9='$Strongsyno9',Strong_syno_10='$Strongsyno10',Strong_syno_11='$Strongsyno11'
   WHERE Strong='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managestrong.php");
    }
    else{
        die("ERROR EDITTING STRONG:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managestrong.php'> <em> GO TO STRONG</em> </a>";
    }

    mysql_close($conn);
?>
