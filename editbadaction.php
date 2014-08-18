<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="bad"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Bad=$_POST["txtBad"];
$Badsyno1=$_POST["txtBadsyno1"];
$Badsyno2=$_POST["txtBadsyno2"];
$Badsyno3=$_POST["txtBadsyno3"];
$Badsyno4=$_POST["txtBadsyno4"];
$Badsyno5=$_POST["txtBadsyno5"];
$Badsyno6=$_POST["txtBadsyno6"];
$Badsyno7=$_POST["txtBadsyno7"];
$Badsyno8=$_POST["txtBadsyno8"];
$Badsyno9=$_POST["txtBadsyno9"];
$Badsyno10=$_POST["txtBadsyno10"];
$Badsyno11=$_POST["txtBadsyno11"];



    $sql = "UPDATE $tbl_name SET Bad = '$Bad', Bad_syno_1='$Badsyno1', Bad_syno_2='$Badsyno2', Bad_syno_3='$Badsyno3', Bad_syno_4='$Badsyno4', Bad_syno_5='$Badsyno5'
     , Bad_syno_6='$Badsyno6', Bad_syno_7='$Badsyno7', Bad_syno_8='$Badsyno8', Bad_syno_9='$Badsyno9', Bad_syno_10='$Badsyno10', Bad_syno_11='$Badsyno11'
       WHERE Bad='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managebad.php");
    }
    else{
        die("ERROR EDITTING BAD:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managebad.php'> <em> GO TO BAD </em> </a>";
    }

    mysql_close($conn);
?>
