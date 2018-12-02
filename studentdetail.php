<!DOCTYPE>
<html>
	<head>
		<title>STUDENT DETAILS </title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=devuice-width,initial-scale=1.0"/>
		<link type="text/css" rel="stylesheet" href="css/studentDetails.css"/>
		<link type="icon/png" rel="icon" href="images/icon.png"/>
	</head>
	<body>
		<div class="container">
			<div class="wrapper">
				<?php
					require_once "includes/repeat.php";
				?>			
				<!---------- MAIN-BOX----------------->
				<div class="main-box">
					<div class="Student-name-box">
						<div class="inner-top-cut"></div>
						<div class="inner-left-cut"></div>
						<label class="student-name">[ Name ]</label>
						<span class="student-code"> IRON MAN</span>
					</div>
					<div class="status">
						<span style="color:orange;font-family:arial;font-size:30px;font-weight:bold;float:right;margin-top:15px;margin-right:20px;">ACTIVE</span>
					</div>
					<div class="photo"  >
						<img src="images/iron-man.jpg" style="filter:grayscale(100%);width:100%;height:120%" />
					</div>
					<div class="box">
						<div class="inner-box">
							<ul>
								<li>CODENAME <span>IRON-MAN</span></li>
								<li>NAME <span>TONY STARK</span></li>
								<li>FATHER NAME <span>HOWARD STARK</span></li>
								<li>MOTHER NAME <span>MARIA STARK</span></li>
								<li>LOCATION <span>NEW YORK</span></li>
								<li>AGE <span>43</span></li>
								<li>BIRTH OF PLACE <span>MANHATTAN</span></li>
								<li>GENDER <span>MALE</span></li>
								<li>HEIGHT <span>6'1"</span></li>
								<li>WEIGHT <span>225 lbs</span></li>
								<li>MARKS <span>UNKNOWN</span></li>
								<li>NATIONALTIY<span>AMERICAN</span></li>
							</ul>
						</div>
					</div>
				<!-----------RIGHT-BOX---------------->
					<div class="Assingment-box">
						<div class="box-header">
							<div class="">
								<span class="text2"><div class="blink" style=" width:10px;height:10px;border:2px solid #A5A5A5;background:red;float:left;margin-left:-30px;position:absolute;border-radius:50%;"></div>ASSINGMENTS</span>
							</div>
						</div>
						<div class="side-cut">
							<div class="side-inner-cut"></div>
						</div>
						<p style="color:#A5A5A5;position:absolute;font-weight:bold; margin-top:-190px;margin-left:10px;font-family:arial;font-size:13px;">On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks.</br> When you create pictures, charts, or diagrams, they also coordinate with your current document look.
					</div>
					<div class="Assingment-box" id="second-box">
						<div class="box-header">
							<div>
								<span class="text2"><div class="blink" style=" width:10px;height:10px;border:2px solid #A5A5A5;background:red;float:left;margin-left:-30px;position:absolute;border-radius:50%;"></div>OTHER LINKS</span>
							</div>
						</div>
						<div class="side-cut" id="side-cut-2"style="margin-top:140px;">
							<div class="side-inner-cut" ></div>
						</div>
						<div class="links">
							<ul>
								<li><a href="studentattendance.html">Attendance</a></li>
								<li><a href="events.html">Upcoming Events</a></li>
								<li><a href="syllabus.html">syllabus</a></li>
								<li><a href="prepapers.html">Previous year papers</a></li>
							</ul>
						</div>
						</div>
				</div>
				
			</div>
		
		</div>
	
	</body>

</html>