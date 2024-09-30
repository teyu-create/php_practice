<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function bai($max){
    $answer = $max *2;    
    return $answer;
    }
    
    echo bai(7);
    echo "\n";
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function tasu($a,$b){
    $answer =$a + $b;
    
    return $answer;
    }
    
    echo tasu(2,5);
    echo "\n";
/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
その要素をすべてかけた結果を返す関数を作成してください*/

/*誤function kakezan($arr){
    $array = $arr[0]* $arr[1]* $arr[2]* $arr[3]* $arr[4];
    return $array;
    }
    echo kakezan([1,3,5,7,9]);*/

function kakezan($arr){
 $ret = 1;
        
    foreach ($arr as $value) {
    $ret = $ret * $value;
    }
            
return $ret;
}
echo kakezan([1,3,5,7,9]);
echo "\n";
/*4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数
を実装しようとしています。途中の部分を完成させてください*/
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
  
    foreach($arr as $a){
     // ここで配列の中の1番大きい値を探したい
   if ($a > $max_number)
   {$max_number = $a ;}
  }
    return $max_number;

  }
  echo  "最大値は" .max_array([9,8,7,10]);
  echo "\n";
  //5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

  //(1)strip_tags (文字列から HTML および PHP タグを取り除く)
  $moji = '<h5>タマという名前の猫を飼っています。</h5><p>5年前にペットショップで出会ったかわいい三毛猫です。</p><a href="#">写真がコチラ</a>';
echo strip_tags($moji);
echo "\n";
// <h5>と<a>は許可
echo strip_tags($moji,'<h5><a>');
echo "\n";

//(2)array_push (一つ以上の要素を配列の最後に追加する)
$array =["red","blue"];
array_push($array,"yellow","green");
foreach ($array as $arr){
    echo $arr;
    echo "\n";
}

//(3)array_merge (ひとつまたは複数の配列をマージする)
$array1 = ["いぬ","ねこ","うさぎ"];
$array2 = ["くま","ぱんだ","ぞう"];

$animals = array_merge($array1,$array2);
print_r($animals);

/*(4)time(現在時刻を Unix エポック (1970 年 1 月 1 日 00:00:00 GMT) からの
通算秒として返す。)*/
echo "現在:".time();
echo "秒";
echo "\n";
/* mktime (与えられた引数に従って UNIX のタイムスタンプを返す。 このタイムスタンプは
Unix epoch(1970年1月1日00:00:00 GMT)から 指定された時刻までの通算秒を表す。*/
echo mktime(20,45,00,9,23,2024);
echo "\n";

//(5)date (指定された日時を任意の形式でフォーマットし、日付文字列を返す)
echo date("Y年/m月/d日/h時/i分");

