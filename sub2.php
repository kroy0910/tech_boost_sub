<?php 
#sub2

##1
$name = "ryo";

if($name == "ryo"){
    echo "私はあなたの名前です";
    echo "\n";
}else{
    echo "あなたの名前ではありません";
    echo "\n";
    }
    
##2
$total = 0;                     #初期化忘れがち
for($num=1; $num <= 10000; $num++){
    $total += $num;             #sum関数があるので$sumとしない
    }
echo $total;
echo "\n";

##3
$fruits=["watermelon","melon","peach","banana","apple"];

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

##4
/* for文の始めの値を定義する*/          #アスタリスクの不足
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){      #イコールの不足

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;                            #セミコロンの不足
    echo "\n";                          #改行の不足
  }
}
?>