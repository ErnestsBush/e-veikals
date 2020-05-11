<!DOCTYPE HTML>
<!--
	Transitive by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>WASD COMPUTERS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">WASD <span>COMPUTERS</span></a></div>
				<a href="#menu" class="toggle"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="image fit">
							<img src="images/pic01.jpg"   alt="" />
						</div>
						<div class="content">
							<header class="align-center">
								<h2>Choose your componentsssssss</h2>

						   
							<?php	
							DEFINE('DB_USERNAME', 'root');
							DEFINE('DB_PASSWORD', '');
							DEFINE('DB_HOST', 'localhost');
							DEFINE('DB_DATABASE', 'test_db');

							$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

  						if (mysqli_connect_error()) {
    							die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
  							}

  							echo 'Connected successfully.';
							?>



								<p>Choose wisely you must, young padawan!

							<?php
								$sql = "SELECT  username, email FROM users";
								$result = $mysqli->query($sql);

								if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo  "Username " . $row["username"]. "Email:" . $row["email"]. "<br>";
								}
								} else {
								echo "0 results";
								}
								$mysqli->close();
							?>

								</p>
							</header>
							<hr />
							<p>  <form action="submission.html" method="POST">
								<h1>Build your  pc!</h1>
								<section class="platform-type">
									<label for="platform">Choose your platform?</label>
									<select name="platform" id="platform">
									  <option value="Amd">Amd</option>
									  <option value="Intel">Intel</option> 
									</select>
								  </section>
								  <hr>
								  <section class="cpu-selection">
									<label for="cpu">Cpu</label>
									<input list="cpus" id="cpu" name="cpu">
									<datalist id="cpus">
									  <option value="i3"></option>
									  <option value="i5"></option>
									  <option value="i7"></option>
									</datalist>
								  </section>
								<hr>
								<hr>
									<section class="mother-board">
										<label for="mb">Motherboard</label>
										<select name="mb" id="mb">
											<option value="mb1"> mb1 </option>
										  <option value="mb2">mb2</option>
										  <option value="mb3">mb3</option>
										  <option value="mb4">mb4</option>
										  </select>
								  </section>
								  <hr>
								<section class="ram">
								  <label for="ram amount">Ram capacity</label>
								  <br>
								  <span>8</span>
								  <input type="range" name="ram amount" id="ram amount" value="1" min="1" max="3">
								  <span>32</span>
								</section>
								<hr>
								<section class="hard-drive">
									<label for="hdd">Hard drive</label>
									<select name="hdd" id="hdd">
										<option value=" - "> - </option>
									  <option value="WD 1tb">WD 1tb</option>
									  <option value="Seagate 2tb">Seagate 2tb</option>
									  <option value="WD 5tb">WD 5tb</option>
									</select>
								</section>
									<hr>
									<section class="solidestate-drive">
										<label for="sdd">Solid state drive</label>
										<select name="sdd" id="sdd">
											<option value="ssd"> - </option>
										  <option value="120gb">120gb</option>
										  <option value="240gb">240gb</option>
										  <option value="512gb">512gb</option>
										  </select>
								  </section>
								  <hr>
								  <section class="gpu-selection">
									<label for="gpu">Gpu</label>
									<input list="gpus" id="gpu" name="gpu">
									<datalist id="gpus">
									  <option value="1050"></option>
									  <option value="1060"></option>
									  <option value="2060"></option>
									</datalist>
								  </section>
								<hr>
								<hr>
									<section class="power-supply">
										<label for="psu">Power Supply</label>
										<select name="psu" id="psu">
											<option value="400W"> 400W </option>
										  <option value="500W">500W</option>
										  <option value="700W">700W</option>
										  <option value="1000W">1000W</option>
										  </select>
								  </section>
								  <hr>
								  <section class="case">
									<label for="case">Case</label>
									<select name="case" id="case">
										<option value="case1"> case1 </option>
									  <option value="case2">case2</option>
									  <option value="case3">case3</option>
									  <option value="case4">case4</option>
									  </select>
							  </section>
							  <hr>
								<section class="cheesy">
								  <span>Add optical drive?</span>
								  <br>
								  <input type="radio" name="cheese" id="yes" value="yes">
								  <label for="yes">Yes</label>
								  <input type="radio" name="cheese" id="no" value="yes">
								  <label for="no">No</label>
								</section>
								<hr>
								<section class="extra-info">
								  <label for="extra">Anything else you want to add?</label>
								  <br>
								  <textarea id="extra" name="extra" rows="3" cols="40"></textarea>
								</section>
								<hr>
						
								<section class="submission">
								  <input type="Submit">
								  
								</section>
								</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style3">
				<div class="inner">

					<header class="align-center">
						<h2>Why choose our services?</h2>
						<p>We the best.</p>
					</header>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer" class="wrapper">
				<div class="inner">
					<section>
						<div class="box">
							<div class="content">
								<h2 class="align-center">Get in Touch</h2>
								<hr />
								<form action="#" method="post">
									<div class="field half first">
										<label for="name">Name</label>
										<input name="name" id="name" type="text" placeholder="Name">
									</div>
									<div class="field half">
										<label for="email">Email</label>
										<input name="email" id="email" type="email" placeholder="Email">
									</div>
									<div class="field">
										<label for="dept">Department</label>
										<div class="select-wrapper">
											<select name="dept" id="dept">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input value="Send Message" class="button special" type="submit"></li>
									</ul>
								</form>
							</div>
						</div>
					</section>
					<div class="copyright">
						&copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a> Video <a href="http://coverr.co/">Coverr</a>.
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>