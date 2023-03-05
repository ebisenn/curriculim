<link rel="stylesheet" href="css/style.css">
<body>
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name=$_POST['my_name'];

//①画像を参考に問題文の選択肢の配列を作成してください。
$choices_1=["80","22","20","21"];
$choices_2=["PHP","Python","JAVA","HTML"];
$choices_3=["join","select","insert","update"];

//② ①で作成した、配列から正解の選択肢の変数を作成してください
$answers=["a1"=>$choices_1[0],"a2"=>$choices_2[3],"a3"=>$choices_3[1]];
?>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name;?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($choices_1 as $value) {
            echo '<form action="answer.php" method="post">';
            echo "<input type=\"radio\" name=\"res[res1]\" value=\"$value\"/>";
            echo $value; 
       } ?> 

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($choices_2 as $value) {
            echo '<form action="answer.php" method="post">';
            echo "<input type=\"radio\" name=\"res[res2]\" value=\"$value\"/>";
            echo $value; 
       } ?> 

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($choices_3 as $value) {
            echo '<form action="answer.php" method="post">';
            echo "<input type=\"radio\" name=\"res[res3]\" value=\"$value\"/>";
            echo $value; 
       } ?> 

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<form action="answer.php" method="post">
    <input type="hidden" name="my_name" value="<?php echo $my_name;?>"/>
    <input type="hidden" name="answers[a1]" value="<?php echo $answers["a1"];?>"/>
    <input type="hidden" name="answers[a2]" value="<?php echo $answers["a2"];?>"/>
    <input type="hidden" name="answers[a3]" value="<?php echo $answers["a3"];?>"/>
    <br>
    <input type="submit" value="回答する"/>
</form>
    </body>