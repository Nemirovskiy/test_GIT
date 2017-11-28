<?
$h = date('G');
function getPartDay($h){
	if($h>=8 && $h<12) return 'Доброе утро';
	elseif($h>=12 && $h<18) return 'Добрый день';
	elseif($h>=18 && $h<22) return 'Добрый вечер';
	elseif(($h>=22 && $h<24)||($h>=0 && $h<8)) return 'Доброй ночи';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>GIT</title>
	<style>
	div {
		width: 1000px;
		margin: auto;
		font-size: 25px;
	}
</style>
</head>
<body>
	<div>
		<h1>Сегодня <?=date('d.n.Y')?></h1>
		<h2>Время <?=date('G:i')?></h2>
		<h2><?=getPartDay(date('G'))?></h2>
		<h2><?=getPartDay(date('G'))?></h2>
	</div>
</body>
</html>
