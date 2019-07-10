<?php
// sub1
?>

<?php
//1
$a = 3;
$b = 7;
echo $a + $b;"\n"
?>

<?php
//2
$array_month = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];
echo $array_month[7];"\n"
?>

<?php
//3
$hello = "Hello";
$name = "ryo";
$world = "'s World!";
echo $hello.$name.$world;"\n"
?>

<?php
//4
$tech_boost = "tech";
$tech_boost .=" boost";
echo $tech_boost;"\n"
?>

<?php
//5
$calendar = [          //配列名の頭が数字、配列、連想配列は[]かarray()
  "January" => "1月",
  "February" => "2月",     //区切りが読点になっていた
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",          //代入（=）になっていた
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",    //文字列になっていなかった
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar["December"];"\n"  //キーが正しく指定されていない

// 出力は一つ一つ改行が要るとのことで"\n"(or "<br>")をつけるよう言われたが
// タグ？で区切ると不要になる？
?>








