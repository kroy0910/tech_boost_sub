<?php 
#sub3

##1
function double($num) {
    $d_num=$num*2;
    return $d_num;
    echo "\n";          #return に改行しても意味がない
}

$e_price = 1000;
echo double($e_price);
echo "\n";

#2
function f($a,$b){
    $total = $a + $b;
    return $total;
}

$coffer = 500;
$breakfast = 600;

echo f($coffer,$breakfast);
echo "\n";

#3

function all_mult($arr){
    $total = 1;
    foreach($arr as $ar){
        $total *= $ar;
    }
    return $total;
}

$array =[1,3,5,7,9];
echo all_mult($array);
echo "\n";

#4
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
         $max_number=$a;
     }
 }
 return $max_number;
 }

echo max_array($array);
echo "\n";

#5
#strip_tags     文字列からhtmlおよびphpのタグを取り除く
$text="<h1 class=logo>Batty's coffee stand</h1><p class=text-sub>あなたに最高のコーヒーを提供します。</p>";
echo strip_tags($text);
echo strip_tags($text,"<p><a>");        #<p>タグと<a>タグは許可

#array_push     配列の最後に要素を追加する
$band = ["vocal","guitar","base","drum"];
array_push($band,"keyboard");
print_r($band);

#array_merge    配列を結合して新しい配列を作る
$member1 = ["ai","ue","o"];
$member2 = ["kaki","kuke","ko"];
$member = array_merge($member1,$member2);
print_r($member);

##連想配列に対してkeyが数値の場合keyが重複するのでゼロから始まる新しいkeyに置き換えられる
$prize1 = [0=>"platinum",1=>"gold",2=>"silver",3=>"blonze"];
$prize2 = [0=>"白金",1=>"金",2=>"銀",3=>"銅"];
$prize = array_merge($prize1,$prize2);
print_r($prize);

###array_merge_recursive関数    配列を再帰的にmerge 連想配列のkeyが文字列の場合、同じ文字列同士で配列を作る
$vegetable1 = ["white"=>"radish","green"=>"cucumber","red"=>"tomato"];
$vegetable2 = ["green"=>"parsley","white"=>"onion","purple"=>"eggplant"];
$vegetable = array_merge_recursive($vegetable1,$vegetable2);
print_r($vegetable);

#time,mktime    unixタイムスタンプ  timeは現在時刻、mktimeは指定時刻を取得
echo "現在のunix時間は".time()."です";
echo "\n";
$time1 = time();
echo $time1;
echo "\n";

#int mktime([時[,分[,秒[,月[,日[,年[,int is_dst]]]]]])  引数は時分秒、月日年を指定、未指定は現在のタイムスタンプになる
#$timestamp = mktime(18,30,50,7,13,2019);
#echo $timestamp;

##date   曜日を取得する  通常番号0:日〜6:土で取得される
$date = date("w");
echo $date;
echo "\n";

###配列に表示する曜日を入れておく（英語でも日本語でも）
$week = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
echo $week[$date];

##timeとdate関数についてcloud9のデフォルトがunixタイム、cloud9のサーバーがアメリカなので、warningがでる（↓時間が違いますよと気が向いたら変更予定）
##PHP Warning:  date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected the timezone 'UTC' for now, but please set date.timezone to select your timezone. in /home/ec2-user/environment/php_practice/sub3.php on line 97
#PHP Stack trace:
#PHP   1. {main}() /home/ec2-user/environment/php_practice/sub3.php:0
#PHP   2. date() /home/ec2-user/environment/php_practice/sub3.php:97


?>







