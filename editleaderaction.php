<?php

    $id = $_GET['id'];

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="leader"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
$Leader=$_POST["txtLeader"];
$Leadersyno1=$_POST["txtLeadersyno1"];
$Leadersyno2=$_POST["txtLeadersyno2"];
$Leadersyno3=$_POST["txtLeadersyno3"];
$Leadersyno4=$_POST["txtLeadersyno4"];
$Leadersyno5=$_POST["txtLeadersyno5"];
$Leadersyno6=$_POST["txtLeadersyno6"];
$Leadersyno7=$_POST["txtLeadersyno7"];
$Leadersyno8=$_POST["txtLeadersyno8"];
$Leadersyno9=$_POST["txtLeadersyno9"];
$Leadersyno10=$_POST["txtLeadersyno10"];
$Leadersyno11=$_POST["txtLeadersyno11"];



    $sql = "UPDATE $tbl_name SET Leader = '$Leader', Leader_syno_1='$Leadersyno1', Leader_syno_2='$Leadersyno2', Leader_syno_3='$Leadersyno3', Leader_syno_4='$Leadersyno4', Leader_syno_5='$Leadersyno5'
     , Leader_syno_6='$Leadersyno6', Leader_syno_7='$Leadersyno7', Leader_syno_8='$Leadersyno8', Leader_syno_9='$Leadersyno9', Leader_syno_10='$Leadersyno10', Leader_syno_11='$Leadersyno11'
       WHERE Leader='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:manageleader.php");
    }
    else{
        die("ERROR EDITTING LEADER:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageleader.php'> <em> GO TO LEADER </em> </a>";
    }

    mysql_close($conn);
?>
