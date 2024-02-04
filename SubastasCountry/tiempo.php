<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=1f039ebe-7460-401c-a76c-95ccc643b633"></script>
</head>
<body>
	<?php
	$mes='Apr';
	$dia = 28;

	?>
	<h1>


	<?php echo '<span id="clock"></span><script>
	const getRemainTime = deadline => {
	let now = new Date(),
	remainTime = (new Date(deadline) - now + 1000)/1000,
	remainSeconds = ("0" + Math.floor(remainTime % 60)).slice(-2);
	remainMinutes = ("0" + Math.floor(remainTime / 60 % 60)).slice(-2);
	remainHours = ("0" + Math.floor(remainTime / 3600 % 24)).slice(-2);
	remainDays = Math.floor(remainTime / (3600 * 24));

	return{
	remainTime,
	remainSeconds,
	remainMinutes,
	remainHours,
	remainDays
}

};

const countdown = (deadline, elem, finalMessage) => {
	const el = document.getElementById(elem);

	const timerUpdate = setInterval( () =>{
		let t = getRemainTime(deadline);
		el.innerHTML= `${t.remainDays}d:${t.remainHours}h:${t.remainMinutes}m:${t.remainSeconds}s`;

		if(t.remainTime <= 1){
			clearInterval(timerUpdate);
			el.innerHTML = finalMessage;

		}

	}, 1000)
};

countdown(" '.$mes.' '.$dia.' 2020 00:00:00 GMT-0500", "clock", "Subasta Terminada");

</script>';
?></h1>
</body>
</html>