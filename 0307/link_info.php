<?php

$uName = $_GET["uName"];
$uId = $_GET["uId"];
$uPhone = $_GET["uPhone"];
$uEmail = $_GET["uEmail"];
$uGender = $_GET["uGender"];
$uAge = $_GET["uAge"];
$uBirth = $_GET["uBirth"];
$uPwd = $_GET["uPwd"];
$uLike = $_GET["uLike"];
$uSecret = $_GET["uSecret"];
$uInterest = $_GET["uInterest"];
$uCity = $_GET["uCity"];
$uComment = $_GET["uComment"];

echo "您的姓名為".$uName."<br>";
echo "您的學號為".$uId."<br>";
echo "您的電話為".$uPhone."<br>";
echo "您的信箱為".$uEmail."<br>";
echo "您的性別為".$uGender."<br>";
echo "您的年齡為".$uAge."<br>";
echo "您的生日為".$uBirth."<br>";
echo "密碼設定為".$uPwd."<br>";
echo "網站評價分數:".$uLike."<br>";
echo "您的秘密為".$uSecret."<br>";

$j = "";
foreach ($uInterest as $i){
    $j= $j.$i.",";
}
echo "您的興趣為".$j."<br>";

echo "所在城市:".$uCity."<br>";
echo "<br>";
echo "您的意見:<br>".nl2br(htmlentities($uComment))."<br>";

?>