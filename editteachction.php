<?php
/**
 * Created by PhpStorm.
 * User: MinhDuc
 * Date: 6/1/14
 * Time: 4:43 PM
 */
$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="teach"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Teach=$_POST["txtTeach"];
$Teachsyno1=$_POST["txtTeachsyno1"];
$Teachsyno2=$_POST["txtTeachsyno2"];
$Teachsyno3=$_POST["txtTeachsyno3"];
$Teachsyno4=$_POST["txtTeachsyno4"];
$Teachsyno5=$_POST["txtTeachsyno5"];
$Teachsyno6=$_POST["txtTeachsyno6"];
$Teachsyno7=$_POST["txtTeachsyno7"];




$sql = "UPDATE $tbl_name SET Teach = '$Teach',Teach_syno_1='$Teachsyno1',Teach_syno_2='$Teachsyno2',Teach_syno_3='$Teachsyno3',Teach_syno_4='$Teachsyno4',Teach_syno_5='$Teachsyno5'
 ,Teach_syno_6='$Teachsyno6',Teach_syno_7='$Teachsyno7'
   WHERE Teach='$id'";

$result=mysql_query($sql);

// if successfully insert data into database, go to login page.
if($result){
    header("location:manageteach.php");
}
else{
    die("ERROR EDITTING TEACH:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageteach.php'> <em> GO TO TEACH </em> </a>";
}

mysql_close($conn);
?>
