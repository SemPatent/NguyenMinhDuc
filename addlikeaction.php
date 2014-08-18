<?php

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="test"; // Database name
    $tbl_name="like_s"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    // Get values from form
    $Likes=$_POST["txtLikes"];
    $Likesyno1=$_POST["txtLikesyno1"];
    $Likesyno2=$_POST["txtLikesyno2"];
    $Likesyno3=$_POST["txtLikesyno3"];
    $Likesyno4=$_POST["txtLikesyno4"];
    $Likesyno5=$_POST["txtLikesyno5"];
    $Likesyno6=$_POST["txtLikesyno6"];
    $Likesyno7=$_POST["txtLikesyno7"];
    $Likesyno8=$_POST["txtLikesyno8"];
    $Likesyno9=$_POST["txtLikesyno9"];
    $Likesyno10=$_POST["txtLikesyno10"];





    $sql="INSERT INTO $tbl_name(Likes,Like_syno_1,Like_syno_2,Like_syno_3,Like_syno_4,Like_syno_5,Like_syno_6,Like_syno_7,Like_syno_8,Like_syno_9,Like_syno_10
)
            VALUES('$Likes','$Likesyno1','$Likesyno2','$Likesyno3','$Likesyno4','$Likesyno5','$Likesyno6','$Likesyno7','$Likesyno8','$Likesyno9','$Likesyno10'
            )";

    $result=mysql_query($sql);

    // if successfully insert data into database
    if($result){
        header("location:managelike.php");
    }
    else{
        die("ERROR EDITTING ACCOUNT:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
        echo "<a href='managelike.php'> <em> VIEW LIKE </em> </a>";
    }

    mysql_close($conn);

?>
