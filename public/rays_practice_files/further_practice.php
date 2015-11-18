<!DOCTYPE html>
<html>
	<?php
		var_dump($_GET);
		var_dump($_POST);
	?>
	<head>
		<meta charset="utf-8">
		<title>Further Practice HTML</title>
	</head>

	<body>
		<header class="large-title">
			<h1>Bring Back West Coast RAP</h1>
				<blockquote><em><font color="gold">The legends that put gangster rap on the map</font></em></blockquote>
				<hr>
		</header>
		<nav class="info-list">
			<form method="POST" action="further_practice.php">
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="username">
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="password">
				<button type="submit">Login</button>
			</form>
            <ul>
                <li class="list-item"><a href="#" title="View the homepage">Home</a></li>
                <li class="list-item"><a href="#" title="Read more about our company">About</a></li>
                <li class="list-item"><a href="#" title="View our contact page">Contact</a></li>
            </ul><hr>
		</nav>
		<section>
			<h3>The Legends</h3>
				<img src="img/westcoat.jpg" class="logo1">
		</section>








	</body>


</html>