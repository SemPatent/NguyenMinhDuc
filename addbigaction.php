<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 11:05 AM
 */
$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="big"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Big=$_POST["txtBig"];
$Bigsyno1=$_POST["txtBigsyno1"];
$Bigsyno2=$_POST["txtBigsyno2"];
$Bigsyno3=$_POST["txtBigsyno3"];
$Bigsyno4=$_POST["txtBigsyno4"];
$Bigsyno5=$_POST["txtBigsyno5"];
$Bigsyno6=$_POST["txtBigsyno6"];
$Bigsyno7=$_POST["txtBigsyno7"];
$Bigsyno8=$_POST["txtBigsyno8"];



$sql="INSERT INTO $tbl_name(Big,Big_syno_1,Big_syno_2,Big_syno_3,Big_syno_4,Big_syno_5,Big_syno_6,Big_syno_7,Big_syno_8)
            VALUES('$Big','$Bigsyno1','$Bigsyno2','$Bigsyno3','$Bigsyno4','$Bigsyno5','$Bigsyno6','$Bigsyno7','$Bigsyno8'
          )";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managebig.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managebig.php'> <em> VIEW BIG </em> </a>";
}

mysql_close($conn);

?>
