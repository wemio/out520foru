<?php
/**
* 520游戏机
author:cenew xiaomiaodashu.com Inc.
addtime:2019/5/20
weixin:simcode
**/

$items=array(5,2,0,5,2,0,5,2,0);

//out-result
$x=$items[mt_rand(0,8)];
$y=$items[mt_rand(0,8)];
$result=out520($x,$y);
$mean=mean520($result);

echo $mean;


/**
//sum output samples
$tmp=array();

for($i=1;$i<=520;$i++){
	$x=$items[mt_rand(0,8)];
	$y=$items[mt_rand(0,8)];
	if($x!=$y){
		$result=out520($x,$y);
		if(!in_array($result,$tmp)){
			array_push($tmp,$result);
		}
	}
}
sort($tmp);
var_dump($tmp);
**/

//out520-maths
function out520($x,$y){
	$rnds=mt_rand(0,9999999999);
	$rnd=$rnds % 4;
	switch($rnd){
		case 0:
			return $x+$y;
			break;
		case 1:
			return $x-$y;
			break;
		case 2:
			return $x*$y;
			break;
		case 3:
			return $y!=0?($x/$y):('∞');
			break;
		default:
			return $x+$y;
	}
	
}

//rnd meaning
function mean520($r){
	$array=array(
		'-5'=>'竟敢负我（玩蛋去吧）',
		'-3'=>'扶桑（花上花，花运不断哈，要小心哦）',
		'-2'=>'福耳（话好听，可是，事儿办的怎么样呢？）',
		'0'=>'继续单身狗？不，这分明是一张大嘴巴，是吻啊，哈哈',
		'0.4'=>'有进步，不过还是s路一条没对象，哈哈哈哈',
		'2'=>'那当然是幸福幸福再幸福啊，成双成对嘛',
		'2.5'=>'两人在一起一无所有？别骂我，都是闹着玩儿的',
		'3'=>'散！（单身狗希望全天下都和我一样，不寂寞）',
		'5'=>'无！让单身狗最痛恨的游戏！！！！',
		'7'=>'妻？齐？看来结婚不远了，加油吧！',
		'10'=>'十全十美，祝福永久',
		'∞'=>'遥遥无期，还是幸福到永远，全凭单身狗程序媛的心情啊'
	);
	return isset($array[$r])?$array[$r]:'天苍苍，野茫茫，再测测，别慌张……';
}