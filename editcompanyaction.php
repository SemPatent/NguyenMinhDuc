<?php

    $id = $_GET['id'];

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



    $sql = "UPDATE $tbl_name SET Company = '$Company', Company_syno_1='$Companysyno1', Company_syno_2='$Companysyno2', Company_syno_3='$Companysyno3', Company_syno_4='$Companysyno4', Company_syno_5='$Companysyno5'
     , Company_syno_6='$Companysyno6', Company_syno_7='$Companysyno7', Company_syno_8='$Companysyno8', Company_syno_9='$Companysyno9' WHERE Company='$id'";

    $result=mysql_query($sql);

    // if successfully insert data into database, go to login page.
    if($result){
        header("location:managecompany.php");
    }
    else{
        die("ERROR EDITTING COMPANY:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managecompany.php'> <em> GO TO COMPANY </em> </a>";
    }

    mysql_close($conn);
?>
