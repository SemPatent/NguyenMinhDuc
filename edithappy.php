<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 5/24/14
 * Time: 11:19 AM
 */
//session_start();
//if(!isset($_SESSION['username'])){
// header("location:welcome.php");
//}
?>

<?php

$id = $_GET['id'];

$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="happy"; // Table name

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

$sql="SELECT * FROM $tbl_name WHERE Happy='$id'";

$result=mysql_query($sql);

if(!$result){
    die("ERROR CHECKING USERNAME:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

$line = mysql_fetch_array($result, MYSQL_ASSOC)
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
<head>
    <title>EDIT HAPPY</title>
    <meta http-equiv="Content-Type" content="txt/html; charset=utf-8" />

    <link rel="stylesheet" type="text/css" href="files/styles.css?v=59969665">
    <script type="text/javascript" src="files/validateInput.js?v=778888"></script>

</head>

<body>


<div id="head">
    <header>
        <h2 > EDIT/DELETE HAPPY </h2>
        <ul class="list" style="margin-top: 50px; ">
            <li style=" font-size: 14px;"><a style="color: #3366FF" href="home.php"><b>HOME</b></a></li>
            <li style="float: right; font-size: 14px; "><a style="color: #3366FF" href="logout.php"><b><i>LOGOUT</i></b></a></li>
        </ul>
    </header>
</div>

<div >
    <h3 > MAKE CHANGES IN THE NECESSARY FIELDS </h3>
</div>
<center>
    <table cellpadding='2' cellspacing='5px' border='5px' style= 'margin-top: 1.8em'>
        <tr><td bgcolor="blue" style='width: 850px'>
                <table cellpadding='0' cellspacing='5px' border='5px' width='100%'>
                    <tr>
                        <td bgcolor="blue" align=center style="padding:5px;padding-bottom:7px">
                            <b>
                                <font size=-1 color="white" face="verdana,arial">
                                    <b><h3>Edit/Delete Record </h3></b>
                                </font>
                    </tr>
                    <tr><td bgcolor=#eee style="padding:8px"><br>
                            <form method="post" action="edithappyaction.php?id=<?php echo $id ?>" name="addsynonyms" target="_top" onsubmit="return validateAdmin()">
                                <table >
                                    <tr >
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy </font></td>
                                        <td  ><input type="text" name="txtHappy" size="21"></td>

                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 1 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno1" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 2 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno2" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 3 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno3" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 4 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno4" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 5 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno5" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 6 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno6" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 7 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno7" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 8 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno8" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 9 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno9" size="21" ></td>
                                    </tr>
                                    <tr>
                                        <td style="padding:4px" ><font face="verdana,arial" size=2>Happy syno 10 </font></td>
                                        <td style="size:160" ><input type="text" name="txtHappysyno10" size="21" ></td>
                                    </tr>






                                    <tr ></tr >
                                    <tr >
                                        <td>&nbsp;</td>
                                        <td style="padding:4px" ><input style="padding:4px" type="submit" value="Save">
                                            <input style="padding:4px" type="button" value="Delete" name="btnDelete" onclick="javascript:location.href='delhappy.php?id=<?php echo $id ?>'">
                                            <input style="padding:4px" type="button" value="Cancel" name="btnCancel" onclick="javascript:location.href='managehappy.php'"></td>
                                    </tr>

                                    <tr>
                                        <td colspan=2>&nbsp;</td>
                                    </tr>

                                </table>

                            </form>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</center>

<ul id="foot">
    <li><a href="contactus.html">Contact Us</a></li> -
    <li><a href="faq.html">FAQ</a></li> -
    <li><a href="terms.html">Terms and Conditions</a></li>
</ul>
</body>
</html>
