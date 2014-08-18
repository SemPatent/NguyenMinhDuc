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
$tbl_name="house"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$House=$_POST["txtHouse"];
$Housesyno1=$_POST["txtHousesyno1"];
$Housesyno2=$_POST["txtHousesyno2"];
$Housesyno3=$_POST["txtHousesyno3"];
$Housesyno4=$_POST["txtHousesyno4"];
$Housesyno5=$_POST["txtHousesyno5"];
$Housesyno6=$_POST["txtHousesyno6"];
$Housesyno7=$_POST["txtHousesyno7"];
$Housesyno8=$_POST["txtHousesyno8"];
$Housesyno9=$_POST["txtHousesyno9"];
$Housesyno10=$_POST["txtHousesyno10"];


$sql="INSERT INTO $tbl_name(House,House_syno_1,House_syno_2,House_syno_3,House_syno_4,House_syno_5,House_syno_6,House_syno_7,House_syno_8,House_syno_9,House_syno_10)
            VALUES('$House','$Housesyno1','$Housesyno2','$Housesyno3','$Housesyno4','$Housesyno5','$Housesyno6','$Housesyno7','$Housesyno8','$Housesyno9','$Housesyno10'
          )";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managehouse.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managehouse.php'> <em> VIEW HOUSE </em> </a>";
}

mysql_close($conn);

?>
