<?php

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






    $sql="INSERT INTO $tbl_name(Teach,Teach_syno_1,Teach_syno_2,Teach_syno_3,Teach_syno_4,Teach_syno_5,Teach_syno_6,Teach_syno_7
)
            VALUES('$Teach','$Teachsyno1','$Teachsyno2','$Teachsyno3','$Teachsyno4','$Teachsyno5','$Teachsyno6','$Teachsyno7'
            )";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:manageteach.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='manageteach.php'> <em> VIEW TEACH </em> </a>";
    }

    mysql_close($conn);

?>
