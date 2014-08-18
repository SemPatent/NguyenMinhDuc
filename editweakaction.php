<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 6:02 PM
 */
$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="weak"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Weak=$_POST["txtWeak"];
$Weaksyno1=$_POST["txtWeaksyno1"];
$Weaksyno2=$_POST["txtWeaksyno2"];
$Weaksyno3=$_POST["txtWeaksyno3"];
$Weaksyno4=$_POST["txtWeaksyno4"];
$Weaksyno5=$_POST["txtWeaksyno5"];
$Weaksyno6=$_POST["txtWeaksyno6"];
$Weaksyno7=$_POST["txtWeaksyno7"];
$Weaksyno8=$_POST["txtWeaksyno8"];
$Weaksyno9=$_POST["txtWeaksyno9"];
$Weaksyno10=$_POST["txtWeaksyno10"];
$Weaksyno11=$_POST["txtWeaksyno11"];




$sql = "UPDATE $tbl_name SET Weak = '$Weak', Weak_syno_1='$Weaksyno1', Weak_syno_2='$Weaksyno2', Weak_syno_3='$Weaksyno3', Weak_syno_4='$Weaksyno4', Weak_syno_5='$Weaksyno5'
 , Weak_syno_6='$Weaksyno6', Weak_syno_7='$Weaksyno7', Weak_syno_8='$Weaksyno8', Weak_syno_9='$Weaksyno9', Weak_syno_10='$Weaksyno10', Weak_syno_11='$Weaksyno11'
   WHERE Weak  ='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:manageweak.php");
}
else{
    die("ERROR EDITTING WEAK:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageweak.php'> <em> GO TO WEAK </em> </a>";
}

mysql_close($conn);
?>
