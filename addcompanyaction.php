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
$tbl_name="company"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

// Get values from form
$Company=$_POST["txtCompany"];
$Companysyno1=$_POST["txtCompanysyno1"];
$Companysyno2=$_POST["txtCompanysyno2"];
$Companysyno3=$_POST["txtCompanysyno3"];
$Companysyno4=$_POST["txtCompanysyno4"];
$Companysyno5=$_POST["txtCompanysyno5"];
$Companysyno6=$_POST["txtCompanysyno6"];
$Companysyno7=$_POST["txtCompanysyno7"];
$Companysyno8=$_POST["txtCompanysyno8"];
$Companysyno9=$_POST["txtCompanysyno9"];



$sql="INSERT INTO $tbl_name(Company,Company_syno_1,Company_syno_2,Company_syno_3,Company_syno_4,Company_syno_5,Company_syno_6,Company_syno_7,Company_syno_8,Company_syno_9
)
            VALUES('$Company','$Companysyno1','$Companysyno2','$Companysyno3','$Companysyno4','$Companysyno5','$Companysyno6','$Companysyno7','$Companysyno8'
            ,'$Companysyno9')";

$result=mysql_query($sql);

// if successfully insert data into database
if($result){
    header("location:managecompany.php");
}
else{
    die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    echo "<a href='managecompany.php'> <em> VIEW COMPANY </em> </a>";
}

mysql_close($conn);

?>
