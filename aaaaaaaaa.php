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
$pos1 = strpos($line, '[');
$pos2 = strpos($line, ']');
$pinyin = substr($line, $pos1+1, $pos2-$pos1-1);
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
,Bad_syno_10,Bad_syno_11,Bad_syno_12,Bad_syno_13,Bad_syno_14,Bad_syno_15,Bad_syno_16,Bad_syno_17,Bad_syno_18,Bad_syno_19,Bad_syno_20
,Bad_syno_21,Bad_syno_22,Bad_syno_23,Bad_syno_24,Bad_syno_25 FROM bad WHERE Bad LIKE '%$searchTerm%'");
if (!$data) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
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
echo $row[12] . " </td>\n";
echo $row[13] . " </td>\n";
echo $row[14] . " </td>\n";
echo $row[15] . " </td>\n";
echo $row[16] . " </td>\n";
echo $row[17] . " </td>\n";
echo $row[18] . " </td>\n";
echo $row[19] . " </td>\n";
echo $row[20] . " </td>\n";
echo $row[21] . " </td>\n";
echo $row[22] . " </td>\n";
echo $row[23] . " </td>\n";
echo $row[24] . " </td>\n";
echo $row[25] . " </td></td>";


$data_1 = mysql_query("SELECT Big,Big_syno_1,Big_syno_2,Big_syno_3,Big_syno_4,Big_syno_5,Big_syno_6,Big_syno_7,Big_syno_8,Big_syno_9,Big_syno_10,
Big_syno_11,Big_syno_12,Big_syno_13,Big_syno_14,Big_syno_15,Big_syno_16,Big_syno_17,Big_syno_18,Big_syno_19,Big_syno_20
,Big_syno_21,Big_syno_22,Big_syno_23,Big_syno_24,Big_syno_25,Big_syno_26,Big_syno_27,Big_syno_28,Big_syno_29,Big_syno_30 FROM big WHERE Big LIKE '%$searchTerm%'");
if (!$data_1) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
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
echo $row_1[9] . " </td>\n";
echo $row_1[10] . " </td>\n";
echo $row_1[11] . " </td>\n";
echo $row_1[12] . " </td>\n";
echo $row_1[13] . " </td>\n";
echo $row_1[14] . " </td>\n";
echo $row_1[15] . " </td>\n";
echo $row_1[16] . " </td>\n";
echo $row_1[17] . " </td>\n";
echo $row_1[18] . " </td>\n";
echo $row_1[19] . " </td>\n";
echo $row_1[20] . " </td>\n";
echo $row_1[21] . " </td>\n";
echo $row_1[22] . " </td>\n";
echo $row_1[23] . " </td>\n";
echo $row_1[24] . " </td>\n";
echo $row_1[25] . " </td>\n";
echo $row_1[26] . " </td>\n";
echo $row_1[27] . " </td>\n";
echo $row_1[28] . " </td>\n";
echo $row_1[29] . " </td>\n";
echo $row_1[30] . " </td>\n";


$data_2 = mysql_query("SELECT content,content_syno_1,content_syno_2,content_syno_3,content_syno_4,content_syno_5,content_syno_6,content_syno_7,content_syno_8,content_syno_9,content_syno_10
,content_syno_11,content_syno_12,content_syno_13,content_syno_14,content_syno_15,content_syno_16,content_syno_17,content_syno_18,content_syno_19,content_syno_20,content_syno_21,content_syno_22,content_syno_23,content_syno_24,content_syno_25 FROM content_s WHERE content LIKE '%$searchTerm%'");
if (!$data_2) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
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
echo $row_2[12] . " </td>\n";
echo $row_2[13] . " </td>\n";
echo $row_2[14] . " </td>\n";
echo $row_2[15] . " </td>\n";
echo $row_2[16] . " </td>\n";
echo $row_2[17] . " </td>\n";
echo $row_2[18] . " </td>\n";
echo $row_2[19] . " </td>\n";
echo $row_2[20] . " </td>\n";
echo $row_2[21] . " </td>\n";
echo $row_2[22] . " </td>\n";
echo $row_2[23] . " </td>\n";
echo $row_2[24] . " </td>\n";
echo $row_2[25] . " </td>\n";


$data_3 = mysql_query("SELECT Happy,Happy_syno_1,Happy_syno_2,Happy_syno_3,Happy_syno_4,Happy_syno_5,Happy_syno_6,Happy_syno_7,Happy_syno_8
,Happy_syno_9,Happy_syno_10,Happy_syno_11,Happy_syno_12,Happy_syno_13,Happy_syno_14,Happy_syno_15,Happy_syno_16,Happy_syno_17,Happy_syno_18
,Happy_syno_19,Happy_syno_20,Happy_syno_21,Happy_syno_22,Happy_syno_23,Happy_syno_24,Happy_syno_25,Happy_syno_26,Happy_syno_27,Happy_syno_28
,Happy_syno_29,Happy_syno_30 FROM happy WHERE Happy LIKE '%$searchTerm%'");
if (!$data_3) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
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
echo $row_3[11] . " </td>\n";
echo $row_3[12] . " </td>\n";
echo $row_3[13] . " </td>\n";
echo $row_3[14] . " </td>\n";
echo $row_3[15] . " </td>\n";
echo $row_3[16] . " </td>\n";
echo $row_3[17] . " </td>\n";
echo $row_3[18] . " </td>\n";
echo $row_3[19] . " </td>\n";
echo $row_3[20] . " </td>\n";
echo $row_3[21] . " </td>\n";
echo $row_3[22] . " </td>\n";
echo $row_3[23] . " </td>\n";
echo $row_3[24] . " </td>\n";
echo $row_3[25] . " </td>\n";
echo $row_3[26] . " </td>\n";
echo $row_3[27] . " </td>\n";
echo $row_3[28] . " </td>\n";
echo $row_3[29] . " </td>\n";
echo $row_3[30] . " </td>\n";

$data_4 = mysql_query("SELECT Likes,Like_syno_1,Like_syno_2,Like_syno_3,Like_syno_4,Like_syno_5,Like_syno_6,Like_syno_7,Like_syno_8,Like_syno_9,Like_syno_10,Like_syno_11,Like_syno_12
,Like_syno_13,Like_syno_14,Like_syno_15,Like_syno_16,Like_syno_17,Like_syno_18,Like_syno_19,Like_syno_20,Like_syno_21,Like_syno_22,Like_syno_23,Like_syno_24
,Like_syno_25,Like_syno_26,Like_syno_27,Like_syno_28,Like_syno_29,Like_syno_30 FROM like_s WHERE Likes LIKE '%$searchTerm%'");
if (!$data_4) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
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
echo $row_4[12] . " </td>\n";
echo $row_4[13] . " </td>\n";
echo $row_4[14] . " </td>\n";
echo $row_4[15] . " </td>\n";
echo $row_4[16] . " </td>\n";
echo $row_4[17] . " </td>\n";
echo $row_4[18] . " </td>\n";
echo $row_4[19] . " </td>\n";
echo $row_4[20] . " </td>\n";
echo $row_4[21] . " </td>\n";
echo $row_4[22] . " </td>\n";
echo $row_4[23] . " </td>\n";
echo $row_4[24] . " </td>\n";
echo $row_4[25] . " </td>\n";
echo $row_4[26] . " </td>\n";
echo $row_4[27] . " </td>\n";
echo $row_4[28] . " </td>\n";
echo $row_4[29] . " </td>\n";
echo $row_4[30] . " </td>\n";

$data_5 = mysql_query("SELECT Little,Little_syno_1,Little_syno_2,Little_syno_3,Little_syno_4,Little_syno_5,Little_syno_6
,Little_syno_7,Little_syno_8,Little_syno_9,Little_syno_10,Little_syno_11,Little_syno_12,Little_syno_13,Little_syno_14,Little_syno_15
,Little_syno_16,Little_syno_17,Little_syno_18,Little_syno_19,Little_syno_20,Little_syno_21,Little_syno_22,Little_syno_23,Little_syno_24,Little_syno_25 FROM little WHERE Little LIKE '%$searchTerm%'");
if (!$data_5) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
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
echo $row_5[13] . " </td>\n";
echo $row_5[14] . " </td>\n";
echo $row_5[15] . " </td>\n";
echo $row_5[16] . " </td>\n";
echo $row_5[17] . " </td>\n";
echo $row_5[18] . " </td>\n";
echo $row_5[19] . " </td>\n";
echo $row_5[20] . " </td>\n";
echo $row_5[21] . " </td>\n";
echo $row_5[22] . " </td>\n";
echo $row_5[23] . " </td>\n";
echo $row_5[24] . " </td>\n";
echo $row_5[25] . " </td>\n";

$data_6 = mysql_query("SELECT Pretty,Pretty_syno_1,Pretty_syno_2,Pretty_syno_3,Pretty_syno_4,Pretty_syno_5,Pretty_syno_6,Pretty_syno_7,Pretty_syno_8,Pretty_syno_9,Pretty_syno_10,Pretty_syno_11,Pretty_syno_12
,Pretty_syno_13,Pretty_syno_14,Pretty_syno_15,Pretty_syno_16,Pretty_syno_17,Pretty_syno_18,Pretty_syno_19,Pretty_syno_20,Pretty_syno_21,Pretty_syno_22,Pretty_syno_23,Pretty_syno_24 FROM pretty WHERE Pretty LIKE '%$searchTerm%'");
if (!$data_6) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
print("$pinyin\n");
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
echo $row_6[13] . " </td>\n";
echo $row_6[14] . " </td>\n";
echo $row_6[15] . " </td>\n";
echo $row_6[16] . " </td>\n";
echo $row_6[17] . " </td>\n";
echo $row_6[18] . " </td>\n";
echo $row_6[19] . " </td>\n";
echo $row_6[20] . " </td>\n";
echo $row_6[21] . " </td>\n";
echo $row_6[22] . " </td>\n";
echo $row_6[23] . " </td>\n";
echo $row_6[24] . " </td>\n";



?>