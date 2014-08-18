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



$sql="INSERT INTO $tbl_name(School,School_syno_1,School_syno_2,School_syno_3,School_syno_4,School_syno_5,School_syno_6,School_syno_7,School_syno_8,School_syno_9,School_syno_10
)
            VALUES('$School','$Schoolsyno1','$Schoolsyno2','$Schoolsyno3','$Schoolsyno4','$Schoolsyno5','$Schoolsyno6','$Schoolsyno7','$Schoolsyno8'
            ,'$Schoolsyno9','$Schoolsyno10')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:manageschool.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='manageschool.php'> <em> VIEW SCHOOL </em> </a>";
}

mysql_close($conn);

?>
