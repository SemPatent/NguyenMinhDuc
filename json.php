<?php

    $data = file_get_contents('php://input');
    $json = json_decode($data);
    $req = $json->{'REQUEST'};

    $sqlhost="127.0.0.1"; // Host name
    $sqlusername="root"; // Mysql username
    $sqlpassword=""; // Mysql password
    $db_name="deandb"; // Database name
    $tbl_name_account="accountstb"; // Table name
    $tbl_name_record="recordstb"; // Table name
    $tbl_name_tickets="ticketstb"; // Table name

    $conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
    if(! $conn )
    {
        die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
    }

    mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

    switch ($req) {
        case 0://LOGIN
        {
            $username = $json->{'USERNAME'};
            $password = $json->{'PASSWORD'};

            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysql_real_escape_string($username);
            $password = mysql_real_escape_string($password);

            $sql="SELECT * FROM $tbl_name_account WHERE username='$username' and password='$password'";
            $result=mysql_query($sql);
            //
            if(!$result){
                die("ERROR CHECKING DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
            }

            $count=mysql_num_rows($result);

            if($count==1){

                $line = mysql_fetch_array($result, MYSQL_ASSOC);
                $acctype = $line['acctype'];
                $arr = array('LOGIN' => 1,'ACCTYPE' => $acctype);

            }else{
                $arr = array('LOGIN' => 0);
            }

            echo json_encode($arr);

            break;
        }
        case 1://GET_LIST
        {
            $username = $json->{'USERNAME'};

            $sql=" SELECT * FROM $tbl_name_account WHERE username='$username' ";
            $result=mysql_query($sql);
            //
            if(!$result){
                die("ERROR CHECKING DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
            }

            $line = mysql_fetch_array($result, MYSQL_ASSOC);
            $teacherName = $line['firstname']." ".$line['middlename']." ".$line['lastname'];

            $sql=" SELECT * FROM $tbl_name_tickets WHERE teacher_name='$teacherName' ";

            $result=mysql_query($sql);
            //
            if(!$result){
                die("ERROR CHECKING DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
            }

            $i=1;
            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                $arr[$i++] = $line['std_name']. ": " .$line['groupName']. ": " .$line['course']. ": " .$line['faculty']
                    . ": " .$line['date_issue']. ": " .$line['expiry_date']. ": " .$line['issuer_initials'];
            }

            echo json_encode($arr);
            break;
        }
        case 2://SAVE_RESULT
        {
            $std_name = $json->{'STDNAME'};
            $course = $json->{'COURSE'};
            $score = $json->{'SCORE'};
            $faculty = $json->{'FACULTY'};
            $groupName = $json->{'GROUP'};
            $date = date('Y/m/d');

            $sql="INSERT INTO $tbl_name_record(std_name,course,date_set,score,faculty,groupName)
            VALUES('$std_name','$course','$date','$score','$faculty','$groupName')";

            $result=mysql_query($sql);

            //
            if($result){
                $arr = array('STATUS' => 1);
            }
            else{
                $arr = array('STATUS' => 0);
            }

            echo json_encode($arr);
            break;
        }
        case 3://SET_TICKETS
        {
            $username = $json->{'USERNAME'};
            $std_name = $json->{'STDNAME'};
            $teacherName = $json->{'TEACHERNAME'};
            $course = $json->{'COURSE'};
            $faculty = $json->{'FACULTY'};
            $groupName = $json->{'GROUP'};
            $date_issue = $json->{'FROM'};
            $expiry_date = $json->{'TO'};

            $sql=" SELECT * FROM $tbl_name_account WHERE username='$username' ";
            $result=mysql_query($sql);
            //
            if(!$result){
                die("ERROR CHECKING DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
            }

            $line = mysql_fetch_array($result, MYSQL_ASSOC);
            $issuerName = $line['firstname']." ".$line['middlename']." ".$line['lastname'];

            $sql="INSERT INTO $tbl_name_tickets(std_name,teacher_name,course,faculty,groupName,date_issue,expiry_date, issuer_initials)
            VALUES('$std_name','$teacherName','$course','$faculty','$groupName','$date_issue','$expiry_date','$issuerName')";

            $result=mysql_query($sql);

            //
            if($result){
                $arr = array('STATUS' => 1);
            }
            else{
                $arr = array('STATUS' => 0);
            }

            echo json_encode($arr);

            break;
        }
        case 4://GET_RESULTS
        {
            $username = $json->{'USERNAME'};
            $std_name = $json->{'STDNAME'};
            $course = $json->{'SUBJECT'};
            $faculty = $json->{'FACULTY'};
            $groupName = $json->{'GROUP'};

            $sql=" SELECT * FROM $tbl_name_record WHERE std_name='$std_name' and course = '$course'
            and faculty ='$faculty' and groupName ='$groupName'";

            $result=mysql_query($sql);
            //
            if(!$result){
                die("ERROR CHECKING DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
            }

            $i=1;
            while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {

                $score = $std_name.": ". $line['score'];
                $arr[$i++] = $score;
            }

            echo json_encode($arr);
            break;
        }
    }
//$username = $json->{'USERNAME'};
//$password = $json->{'PASSWORD'};
//$arr = array('a' => $username, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 'eeeee');
//$json2 = '{"a":1,"b":2,"c":3,"d":4,"e":5}';
//print $json2;
//echo 'Connection OK';
//$json2 = '{"a":"admin","b":2,"c":3,"d":4,"e":"juy"}';
//print $json2;
//echo 'Connection OK';

//$arr = array('a' => 'aaa', 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 'eeeee');

//echo json_encode($arr);

   //mysql_close($conn);
?>