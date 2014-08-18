<?php
/**
 * Created by PhpStorm.
 * User: Sadeeq
 * Date: 6/6/14
 * Time: 7:40 PM
 */
$sqlhost="127.0.0.1"; // Host name
$sqlusername="root"; // Mysql username
$sqlpassword=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="request"; // Table name

header('Content-Type: text/plain;charset=utf-8');

// Find the pinyin
//$pos1 = strpos($line, '[');
//$pos2 = strpos($line, ']');
//$pinyin = substr($line, $pos1+1, $pos2-$pos1-1);
//print("$pinyin\n");


//capture search term and remove spaces at its both ends if there is any
$searchTerm = trim($_POST["keyname"]);

//check whether the name parsed is empty
if($searchTerm == "")
{
    echo "Enter name you are searching for.";
    exit();
}

$conn = mysql_connect("$sqlhost", "$sqlusername", "$sqlpassword");
if(! $conn )
{
    die("COULD NOT CONNECT TO DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");
}

mysql_select_db("$db_name")or die("COULD NOT SELECT DB:" .mysql_errno($conn) . ": " . mysql_error($conn) . "\n");

$data = mysql_query("SELECT Bad,Bad_syno_1,Bad_syno_2,Bad_syno_3,Bad_syno_4,Bad_syno_5,Bad_syno_6,Bad_syno_7,Bad_syno_8,Bad_syno_9
,Bad_syno_10,Bad_syno_11 FROM bad WHERE Bad LIKE '%$searchTerm%'");
if (!$data) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row = mysql_fetch_row($data);
echo "<tr>";
echo $row[0] . " </td>\n";
echo $row[1] . " </td>\n";
echo $row[2] . " </td>\n";
echo $row[3] . " </td>\n";
echo $row[4] . " </td>\n";
echo $row[5] . " </td>\n";
echo $row[6] . " </td>\n";
echo $row[7] . " </td>\n";
echo $row[8] . " </td>\n";
echo $row[9] . " </td>\n";
echo $row[10] . " </td>\n";
echo $row[11] . " </td>\n";




$data_1 = mysql_query("SELECT Big,Big_syno_1,Big_syno_2,Big_syno_3,Big_syno_4,Big_syno_5,Big_syno_6,Big_syno_7,Big_syno_8 FROM big WHERE Big LIKE '%$searchTerm%'");
if (!$data_1) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_1 = mysql_fetch_row($data_1);
echo "<tr>";
echo $row_1[0] . " </td>\n";
echo $row_1[1] . " </td>\n";
echo $row_1[2] . " </td>\n";
echo $row_1[3] . " </td>\n";
echo $row_1[4] . " </td>\n";
echo $row_1[5] . " </td>\n";
echo $row_1[6] . " </td>\n";
echo $row_1[7] . " </td>\n";
echo $row_1[8] . " </td>\n";




$data_2 = mysql_query("SELECT Strong,Strong_syno_1,Strong_syno_2,Strong_syno_3,Strong_syno_4,Strong_syno_5,Strong_syno_6,Strong_syno_7,Strong_syno_8,Strong_syno_9,Strong_syno_10
,Strong_syno_11 FROM strong WHERE Strong LIKE '%$searchTerm%'");
if (!$data_2) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_2 = mysql_fetch_row($data_2);
echo "<tr>";
echo $row_2[0] . " </td>\n";
echo $row_2[1] . " </td>\n";
echo $row_2[2] . " </td>\n";
echo $row_2[3] . " </td>\n";
echo $row_2[4] . " </td>\n";
echo $row_2[5] . " </td>\n";
echo $row_2[6] . " </td>\n";
echo $row_2[7] . " </td>\n";
echo $row_2[8] . " </td>\n";
echo $row_2[9] . " </td>\n";
echo $row_2[10] . " </td>\n";
echo $row_2[11] . " </td>\n";




$data_3 = mysql_query("SELECT Happy,Happy_syno_1,Happy_syno_2,Happy_syno_3,Happy_syno_4,Happy_syno_5,Happy_syno_6,Happy_syno_7,Happy_syno_8
,Happy_syno_9,Happy_syno_10 FROM happy WHERE Happy LIKE '%$searchTerm%'");
if (!$data_3) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_3 = mysql_fetch_row($data_3);
echo "<tr>";
echo $row_3[0] . " </td>\n";
echo $row_3[1] . " </td>\n";
echo $row_3[2] . " </td>\n";
echo $row_3[3] . " </td>\n";
echo $row_3[4] . " </td>\n";
echo $row_3[5] . " </td>\n";
echo $row_3[6] . " </td>\n";
echo $row_3[7] . " </td>\n";
echo $row_3[8] . " </td>\n";
echo $row_3[9] . " </td>\n";
echo $row_3[10] . " </td>\n";

///////////////////////////////////////////////////////////

$data_4 = mysql_query("SELECT Likes,Like_syno_1,Like_syno_2,Like_syno_3,Like_syno_4,Like_syno_5,Like_syno_6,Like_syno_7,Like_syno_8,Like_syno_9,Like_syno_10,Like_syno_11
 FROM like_s WHERE Likes LIKE '%$searchTerm%'");
if (!$data_4) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_4 = mysql_fetch_row($data_4);
echo "<tr>";
echo $row_4[0] . " </td>\n";
echo $row_4[1] . " </td>\n";
echo $row_4[2] . " </td>\n";
echo $row_4[3] . " </td>\n";
echo $row_4[4] . " </td>\n";
echo $row_4[5] . " </td>\n";
echo $row_4[6] . " </td>\n";
echo $row_4[7] . " </td>\n";
echo $row_4[8] . " </td>\n";
echo $row_4[9] . " </td>\n";
echo $row_4[10] . " </td>\n";
echo $row_4[11] . " </td>\n";

$data_5 = mysql_query("SELECT Weak,Weak_syno_1,Weak_syno_2,Weak_syno_3,Weak_syno_4,Weak_syno_5,Weak_syno_6
,Weak_syno_7,Weak_syno_8,Weak_syno_9,Weak_syno_10,Weak_syno_11 FROM weak WHERE Weak LIKE '%$searchTerm%'");
if (!$data_5) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_5 = mysql_fetch_row($data_5);
echo "<tr>";
echo $row_5[0] . " </td>\n";
echo $row_5[1] . " </td>\n";
echo $row_5[2] . " </td>\n";
echo $row_5[3] . " </td>\n";
echo $row_5[4] . " </td>\n";
echo $row_5[5] . " </td>\n";
echo $row_5[6] . " </td>\n";
echo $row_5[7] . " </td>\n";
echo $row_5[8] . " </td>\n";
echo $row_5[9] . " </td>\n";
echo $row_5[10] . " </td>\n";
echo $row_5[11] . " </td>\n";
echo $row_5[12] . " </td>\n";


$data_6 = mysql_query("SELECT Nice,Nice_syno_1,Nice_syno_2,Nice_syno_3,Nice_syno_4,Nice_syno_5,Nice_syno_6,Nice_syno_7,Nice_syno_8,Nice_syno_9,Nice_syno_10,Nice_syno_11,Nice_syno_12
 FROM nice WHERE Nice LIKE '%$searchTerm%'");
if (!$data_6) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_6 = mysql_fetch_row($data_6);
echo "<tr>";
echo $row_6[0] . " </td>\n";
echo $row_6[1] . " </td>\n";
echo $row_6[2] . " </td>\n";
echo $row_6[3] . " </td>\n";
echo $row_6[4] . " </td>\n";
echo $row_6[5] . " </td>\n";
echo $row_6[6] . " </td>\n";
echo $row_6[7] . " </td>\n";
echo $row_6[8] . " </td>\n";
echo $row_6[9] . " </td>\n";
echo $row_6[10] . " </td>\n";
echo $row_6[11] . " </td>\n";
echo $row_6[12] . " </td>\n";



$data_7 = mysql_query("SELECT Company,Company_syno_1,Company_syno_2,Company_syno_3,Company_syno_4,Company_syno_5,Company_syno_6,Company_syno_7,Company_syno_8,Company_syno_9
 FROM company WHERE Company LIKE '%$searchTerm%'");
if (!$data_7) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_7 = mysql_fetch_row($data_7);
echo "<tr>";
echo $row_7[0] . " </td>\n";
echo $row_7[1] . " </td>\n";
echo $row_7[2] . " </td>\n";
echo $row_7[3] . " </td>\n";
echo $row_7[4] . " </td>\n";
echo $row_7[5] . " </td>\n";
echo $row_7[6] . " </td>\n";
echo $row_7[7] . " </td>\n";
echo $row_7[8] . " </td>\n";
echo $row_7[9] . " </td>\n";



$data_8 = mysql_query("SELECT School,School_syno_1,School_syno_2,School_syno_3,School_syno_4,School_syno_5,School_syno_6,School_syno_7,School_syno_8,School_syno_9,School_syno_10
 FROM school WHERE School LIKE '%$searchTerm%'");
if (!$data_8) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_8 = mysql_fetch_row($data_8);
echo "<tr>";
echo $row_8[0] . " </td>\n";
echo $row_8[1] . " </td>\n";
echo $row_8[2] . " </td>\n";
echo $row_8[3] . " </td>\n";
echo $row_8[4] . " </td>\n";
echo $row_8[5] . " </td>\n";
echo $row_8[6] . " </td>\n";
echo $row_8[7] . " </td>\n";
echo $row_8[8] . " </td>\n";
echo $row_8[9] . " </td>\n";
echo $row_8[10] . " </td>\n";



$data_9 = mysql_query("SELECT Teach,Teach_syno_1,Teach_syno_2,Teach_syno_3,Teach_syno_4,Teach_syno_5,Teach_syno_6,Teach_syno_7 FROM teach WHERE Teach LIKE '%$searchTerm%'");
if (!$data_9) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_9 = mysql_fetch_row($data_9);
echo "<tr>";
echo $row_9[0] . " </td>\n";
echo $row_9[1] . " </td>\n";
echo $row_9[2] . " </td>\n";
echo $row_9[3] . " </td>\n";
echo $row_9[4] . " </td>\n";
echo $row_9[5] . " </td>\n";
echo $row_9[6] . " </td>\n";
echo $row_9[7] . " </td>\n";


$data_10 = mysql_query("SELECT House,House_syno_1,House_syno_2,House_syno_3,House_syno_4,House_syno_5,House_syno_6,House_syno_7,House_syno_8,House_syno_9,House_syno_10 FROM house WHERE House LIKE '%$searchTerm%'");
if (!$data_10) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_10 = mysql_fetch_row($data_10);
echo "<tr>";
echo $row_10[0] . " </td>\n";
echo $row_10[1] . " </td>\n";
echo $row_10[2] . " </td>\n";
echo $row_10[3] . " </td>\n";
echo $row_10[4] . " </td>\n";
echo $row_10[5] . " </td>\n";
echo $row_10[6] . " </td>\n";
echo $row_10[7] . " </td>\n";
echo $row_10[8] . " </td>\n";
echo $row_10[9] . " </td>\n";
echo $row_10[10] . " </td>\n";



$data_11 = mysql_query("SELECT Leader,Leader_syno_1,Leader_syno_2,Leader_syno_3,Leader_syno_4,Leader_syno_5,Leader_syno_6,Leader_syno_7,Leader_syno_8,Leader_syno_9,Leader_syno_10,Leader_syno_11 FROM leader WHERE Leader LIKE '%$searchTerm%'");
if (!$data_11) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
//print("$pinyin\n");
$row_11 = mysql_fetch_row($data_9);
echo "<tr>";
echo $row_11[0] . " </td>\n";
echo $row_11[1] . " </td>\n";
echo $row_11[2] . " </td>\n";
echo $row_11[3] . " </td>\n";
echo $row_11[4] . " </td>\n";
echo $row_11[5] . " </td>\n";
echo $row_11[6] . " </td>\n";
echo $row_11[7] . " </td>\n";
echo $row_11[8] . " </td>\n";
echo $row_11[9] . " </td>\n";
echo $row_11[10] . " </td>\n";
echo $row_11[11] . " </td>\n";

?>