<?php

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="strong"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
    $Strong=$_POST["txtStrong"];
    $Strongsyno1=$_POST["txtStrongsyno1"];
    $Strongsyno2=$_POST["txtStrongsyno2"];
    $Strongsyno3=$_POST["txtStrongsyno3"];
    $Strongsyno4=$_POST["txtStrongsyno4"];
    $Strongsyno5=$_POST["txtStrongsyno5"];
    $Strongsyno6=$_POST["txtStrongsyno6"];
    $Strongsyno7=$_POST["txtStrongsyno7"];
    $Strongsyno8=$_POST["txtStrongsyno8"];
    $Strongsyno9=$_POST["txtStrongsyno9"];
    $Strongsyno10=$_POST["txtStrongsyno10"];
    $Strongsyno11=$_POST["txtStrongsyno11"];




    $sql="INSERT INTO $tbl_name(Strong,Strong_syno_1,Strong_syno_2,Strong_syno_3,Strong_syno_4,Strong_syno_5,Strong_syno_6,Strong_syno_7,Strong_syno_8,Strong_syno_9,Strong_syno_10
,Strong_syno_11)
            VALUES('$Strong','$Strongsyno1','$Strongsyno2','$Strongsyno3','$Strongsyno4','$Strongsyno5','$Strongsyno6','$Strongsyno7','$Strongsyno8','$Strongsyno9','$Strongsyno10'
            ,'$Strongsyno11')";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managestrong.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managestrong.php'> <em> VIEW STRONGS </em> </a>";
    }

    mysql_close($conn);

?>
