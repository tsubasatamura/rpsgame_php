<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>じゃんけんゲームforPHP</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
	rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
	crossorigin="anonymous">
	<?php require_once __DIR__.'/included.php'; ?>
</head>
<body class="bg-light">
	<div class="container w-75 text-center">
	<h1 class="text-success my-4">じゃんけんゲームforPHP</h1>
		<form method="post">
		<button type="submit" name="myHand" class="btn btn-success" value="0">グー</button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" name="myHand" class="btn btn-success" value="1">チョキ</button>&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="submit" name="myHand" class="btn btn-success" value="2">パー</button>
		</form>
	<div>&nbsp;</div>
	<?php if(isset($_POST['myHand'])){
		$myHand=$_POST['myHand'];
		$cpuHand=mt_rand(0,2);?>
	<p id="myHandResult">あなたの手は<?=createHand($myHand)?></p>
	<p id="cpuHandResult">CPUの手は<?=createHand($cpuHand)?></p>
	<p id="result"><?=getResult($myHand,$cpuHand)?></p>
	<?php }else{?>
	<p id="myHandResult">自分の手を表示</p>
	<p id="cpuHandResult">CPUの手を表示</p>
	<p id="result">結果表示</p>
	<?php }?>
	</div>
</body>
</html>