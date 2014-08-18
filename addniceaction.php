<?php

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="nice"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
    $Nice=$_POST["txtNice"];
    $Nicesyno1=$_POST["txtNicesyno1"];
    $Nicesyno2=$_POST["txtNicesyno2"];
    $Nicesyno3=$_POST["txtNicesyno3"];
    $Nicesyno4=$_POST["txtNicesyno4"];
    $Nicesyno5=$_POST["txtNicesyno5"];
    $Nicesyno6=$_POST["txtNicesyno6"];
    $Nicesyno7=$_POST["txtNicesyno7"];
    $Nicesyno8=$_POST["txtNicesyno8"];
    $Nicesyno9=$_POST["txtNicesyno9"];
    $Nicesyno10=$_POST["txtNicesyno10"];
    $Nicesyno11=$_POST["txtNicesyno11"];
    $Nicesyno12=$_POST["txtNicesyno12"];




    $sql="INSERT INTO $tbl_name(Nice,Nice_syno_1,Nice_syno_2,Nice_syno_3,Nice_syno_4,Nice_syno_5,Nice_syno_6,Nice_syno_7,Nice_syno_8,Nice_syno_9,Nice_syno_10,Nice_syno_11,Nice_syno_12
)
            VALUES('$Nice','$Nicesyno1','$Nicesyno2','$Nicesyno3','$Nicesyno4','$Nicesyno5','$Nicesyno6','$Nicesyno7','$Nicesyno8','$Nicesyno9','$Nicesyno10','$Nicesyno11','$Nicesyno12'
            )";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managenice.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managenice.php'> <em> VIEW NICE </em> </a>";
    }

    mysql_close($conn);

?>
