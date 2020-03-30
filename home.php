<?php

session_start();
?>

<html>
<link rel="stylesheet" href="./st.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<head>
<title> Home Page </title>
</head>

<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">

            <div class="container">
                <a href="" class=" navbar-brand font-weight-bold">FACULTY TRACKING SYSTEM</a>

                <div class="collapse navbar-collapse text-center" id="collapsenavbar">

                    <ul class="navbar-nav ml-auto ">
                        <li clas="nav-item">
                            <a href="newpageweb.html" class="nav-link text-white"> HOME</a>
                        </li>
						<li clas="nav-item">
                            <a href="about.html" class="nav-link text-white"> ABOUT US</a>
                        </li>
						<li clas="nav-item">
							<a href="logout.php" class="nav-link text-white">LOGOUT</a>
						</li>
                    </ul>
                </div>
            </div>
</nav>


			<div class="dep">
			<h2>Select the department of the respective Faculty.</h2>
			<span class="border"></span>
				<div class="det">

					<a href="#cse"><img src="cse.jpeg" alt=""></a>
					<a href="#ce"><img src="ce.jpg" alt=""></a>
					<a href="#me"><img src="me.jpg" alt=""></a>
					<a href="#ece"><img src="ece.jpg" alt=""></a>
					<a href="#eee"><img src="eee.jpg" alt=""></a>
				</div>
				<div class="section" id="cse">
					<span class="name">Computer Science Engineering</</span>
					<p><button onclick="window.location='excel_info.htm'" >
					<b>Click Here</b></button></p>
				</div>
				<div class="section" id="ce">
					<span class="name">Civil Engineering</</span>
					<p><button onclick="window.location='excel_info.htm'">
					<b>Click Here</b></button></p>
				</div>
				<div class="section" id="me">
					<span class="name">Mechanical Engineering</</span>
					<p><button onclick="window.location='excel_info.htm'">
					<b>Click Here</b></button></p>
				</div>
				<div class="section" id="ece">
					<span class="name">Electronics Engineering</</span>
					<p><button onclick="window.location='excel_info.htm'">
					<b>Click Here</b></button></p>
				</div>
				<div class="section" id="eee">
					<span class="name">Electrical & Electronics Engineering</</span>
					<p><button onclick="window.location='excel_info.htm'">
					<b>Click Here</b></button></p>
				</div>
			</div>

</body>

</html>