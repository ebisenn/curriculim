<link rel="stylesheet" href="css/style.css">
<body>
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name=$_POST['my_name'];
$res=$_POST['res'];
$answers=$_POST['answers'];

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judgeAnswer($r,$a){
    if ($r==$a){
        print "正解！";
    }else{
        print "残念・・・";
    }
}

?>

<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgeAnswer($res["res1"],$answers["a1"]);?>

<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgeAnswer($res["res2"],$answers["a2"]);?>

<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php judgeAnswer($res["res3"],$answers["a3"]);?>
</body>