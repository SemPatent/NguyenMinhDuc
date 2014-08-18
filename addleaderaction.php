<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 5:56 PM
 */
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



$sql="INSERT INTO $tbl_name(Leader,Leader_syno_1,Leader_syno_2,Leader_syno_3,Leader_syno_4,Leader_syno_5,Leader_syno_6,Leader_syno_7,Leader_syno_8,Leader_syno_9
,Leader_syno_10,Leader_syno_11)
            VALUES('$Leader','$Leadersyno1','$Leadersyno2','$Leadersyno3','$Leadersyno4','$Leadersyno5','$Leadersyno6','$Leadersyno7','$Leadersyno8'
            ,'$Leadersyno9','$Leadersyno10','$Leadersyno11')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:manageleader.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageleader.php'> <em> VIEW LEADER </em> </a>";
}

mysql_close($conn);

?>
