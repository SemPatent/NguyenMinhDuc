<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="school"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$School=$_POST["txtSchool"];
$Schoolsyno1=$_POST["txtSchoolsyno1"];
$Schoolsyno2=$_POST["txtSchoolsyno2"];
$Schoolsyno3=$_POST["txtSchoolsyno3"];
$Schoolsyno4=$_POST["txtSchoolsyno4"];
$Schoolsyno5=$_POST["txtSchoolsyno5"];
$Schoolsyno6=$_POST["txtSchoolsyno6"];
$Schoolsyno7=$_POST["txtSchoolsyno7"];
$Schoolsyno8=$_POST["txtSchoolsyno8"];
$Schoolsyno9=$_POST["txtSchoolsyno9"];
$Schoolsyno10=$_POST["txtSchoolsyno10"];



    $sql = "UPDATE $tbl_name SET School = '$School', School_syno_1='$Schoolsyno1', School_syno_2='$Schoolsyno2', School_syno_3='$Schoolsyno3', School_syno_4='$Schoolsyno4', School_syno_5='$Schoolsyno5'
     , School_syno_6='$Schoolsyno6', School_syno_7='$Schoolsyno7', School_syno_8='$Schoolsyno8', School_syno_9='$Schoolsyno9', School_syno_10='$Schoolsyno10' WHERE School='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:manageschool.php");
    }
    else{
        die("ERROR EDITTING SCHOOL:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageschool.php'> <em> GO TO SCHOOL </em> </a>";
    }

    mysql_close($conn);
?>
