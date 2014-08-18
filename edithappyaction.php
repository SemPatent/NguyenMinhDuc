<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 11:24 AM
 */
$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="happy"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Happy=$_POST["txtHappy"];
$Happysyno1=$_POST["txtHappysyno1"];
$Happysyno2=$_POST["txtHappysyno2"];
$Happysyno3=$_POST["txtHappysyno3"];
$Happysyno4=$_POST["txtHappysyno4"];
$Happysyno5=$_POST["txtHappysyno5"];
$Happysyno6=$_POST["txtHappysyno6"];
$Happysyno7=$_POST["txtHappysyno7"];
$Happysyno8=$_POST["txtHappysyno8"];
$Happysyno9=$_POST["txtHappysyno9"];
$Happysyno10=$_POST["txtHappysyno10"];



$sql = "UPDATE $tbl_name SET Happy = '$Happy',Happy_syno_1='$Happysyno1',Happy_syno_2='$Happysyno2',Happy_syno_3='$Happysyno3',Happy_syno_4='$Happysyno4',Happy_syno_5='$Happysyno5'
 ,Happy_syno_6='$Happysyno6',Happy_syno_7='$Happysyno7',Happy_syno_8='$Happysyno8',Happy_syno_9='$Happysyno9',Happy_syno_10='$Happysyno10'
   WHERE Happy='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:managehappy.php");
}
else{
    die("ERROR EDITTING HAPPY:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managehappy.php'> <em> GO TO HAPPY </em> </a>";
}

mysql_close($conn);
?>
