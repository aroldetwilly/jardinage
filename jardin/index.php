<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <title>Mon potager</title>
    <script type="text/javascript">

     function slide() {
        un.style.marginTop="0px";
        un.style.opacity=100;  
        deux.style.marginTop="0px";     
        deux.style.opacity=100;    
     	trois.style.marginTop="25px";
        trois.style.opacity = 100;          
     	quatre.style.marginTop="25px";
        quatre.style.opacity = 100; 
                     }
     </script>  
</head>

	<body onload="slide()">


		<div id="container"><a href="/home.php">
			<img src="images/vegetables 2.png" alt="" id="un">
			<img src="images/vegetables 1.png" alt="" id="deux">
			<img src="images/vegetables 3.png" alt="" id="trois">
			<img src="images/fruits.png" alt="" id="quatre"></a>
		</div>	
			<h1 id="titre">Explorez le monde du potager ... </h1>
			<script type="text/javascript">// set up text to print, each item in array is new line
			function typeEffect(element, speed) {
			  var text = element.innerHTML;
			  element.innerHTML = "";
			  
			  var i = 0;
			  var timer = setInterval(function() {
			    if (i < text.length) {
			      element.append(text.charAt(i));
			      i++;
			    } else {
			      clearInterval(timer);
			    }
			  }, speed);
			}

			// application
			var speed = 75;
			var h1 = document.querySelector('h1');
			var p = document.querySelector('p');
			var delay = h1.innerHTML.length * speed + speed;

			// type affect to header
			typeEffect(h1, speed);

			// type affect to body
			setTimeout(function(){
			  p.style.display = "inline-block";
			  typeEffect(p, speed);
			}, delay);
		</script>
	</body>
</html>