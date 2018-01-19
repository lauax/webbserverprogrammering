<!doctype html>
<html>
	
	<head>
		<title>Javascript</title>
	</head>	
		<script>
			function meddlande(){
				alert("mitt meddlande");
			}
			function bigImg(x){
				x.style.height = "300px";
				x.style.width = "300px";
			}

			function normalImg(x){
				x.style.height = "150px";
				x.style.width = "150px";
			}
			
			
		</script>
	
	<body>
		<button onClick="meddlande()">Uppgift 1</button>
		<img src="BoostedG1Willliam.jpg" alt="Uppgift2" onmouseover="bigImg(this)" onmouseleave="normalImg(this)" width="100" height="100"/>
	</body>
	
	
</html>
















































