<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/1/14
 * Time: 4:30 PM
 */
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



$sql="INSERT INTO $tbl_name(Weak,Weak_syno_1,Weak_syno_2,Weak_syno_3,Weak_syno_4,Weak_syno_5,Weak_syno_6
,Weak_syno_7,Weak_syno_8,Weak_syno_9,Weak_syno_10,Weak_syno_11)
            VALUES('$Weak','$Weaksyno1','$Weaksyno2','$Weaksyno3','$Weaksyno4','$Weaksyno5','$Weaksyno6','$Weaksyno7'
            ,'$Weaksyno8','$Weaksyno9','$Weaksyno10','$Weaksyno11')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:manageweak.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageweak.php'> <em> VIEW WEAK </em> </a>";
}

mysql_close($conn);

?>
