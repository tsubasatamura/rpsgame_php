<?php
	function createHand(int $hand):string{
		$judgeHand=['グー','チョキ','パー'];
		return $judgeHand[$hand];
	}

	function getResult(int $myHand,int $cpuHand):string{
		$result=['あなたの勝ちです','CPUの勝ちです','あいこです'];
		$resultTable=[[2,0,1],
				     [1,2,0],
				     [0,1,2]];
		return $result[$resultTable[$myHand][$cpuHand]];
	}