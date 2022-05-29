<?php
if (isset($_POST['btnsubmit'])) {
	header("location:getattendance.php");
}
?>
<html>

<head>
	<title>Attendance</title>
	<link
      rel="shortcut icon"
      href="images/favlogo.webp"
      type="image/x-icon"
    />
	<style type="text/css">
		*{
			font-family: "Poppins", sans-serif;
		}
		nav {
			margin-left: -15px;
			margin-top: -15px;
			margin-right: -20px;
			height: 100px;
			background: black;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0px 50px 0px 100px;
			font-family: "Open Sans", sans-serif;
		}

		nav .logo {
			margin-left: -72px;
			display: flex;
			font-size: 26px;
			color: white;
		}

		nav.logo.active {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 1000;
		}

		nav .logo h4 {
			margin: 10px;
			font-weight: 100;
		}

		nav .logo img {
			height: 50px;
			width: 60px;
			margin-top: 5px;
			filter: invert(100%);
		}

		nav ul {
			display: flex;
			list-style: none;
		}

		nav ul li a {
			color: white;
			text-decoration: none;
			font-size: 17px;
			padding: 7px 7px;
			border-radius: 3px;
			transition: all 0.3s ease;
		}

		nav ul li a:hover,
		nav ul li a.active {
			background: white;
			color: black;
		}

		nav ul li {
			margin: 0 7px;
		}

		nav .menu-btn i {
			color: #fff;
			font-size: 20px;
			cursor: pointer;
			display: none;
		}

		#click:checked~.menu-btn i::before {
			content: "\f00d";
		}

		#click {
			display: none;
		}

		#click:checked~ul {
			left: 0%;
		}

		@media (max-width: 940px) {
			nav ul {
				position: fixed;
				top: 60px;
				left: -100%;
				background-color: #111;
				height: 100vh;
				width: 100%;
				display: block;
				text-align: center;
				transition: all 0.5s ease;
				z-index: 1000;
			}

			nav ul li {
				margin: 40px 0;
			}

			nav ul li a {
				font-size: 20px;
				display: block;
			}

			nav ul li a:hover,
			nav ul li a.active {
				background: none;
				color: cyan;
			}

			nav .menu-btn i {
				display: block;
			}
		}

		.style1 {
			font-family: "Poppins", sans-serif;
			font-size: 50px;

			font-style: italic;
		}

		.style2 {
			font-size: 24px;

		}

		.style7 {
			color: white;
			font-size: 18px;
		}

		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}

		/***************TABLE CSS**************/
		.content-table {
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			min-width: 400px;
			border-radius: 5px 5px 0 0;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}

		.content-table thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
			font-weight: bold;
		}

		.content-table th,
		.content-table td {
			padding: 12px 15px;
		}

		.content-table tbody tr {
			border-bottom: 1px solid #dddddd;
		}

		.content-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.content-table tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}

		.content-table tbody tr.active-row {
			font-weight: bold;
			color: #009879;
		}

		.button1 {
			background-color: #009879;
			color: #ffffff;
			border: none;
			padding: 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 22px;
			margin: 4px 2px;
			cursor: pointer;
			font-weight: bold;
		}

		.button1 {
			border-radius: 12px;
		}
		.below-content{
			font-size: 22px;
		}
	</style>
</head>

<body>
	<script type="text/javascript">
		function getatt(value) {
			if (value == true) {
				document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
				document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
			} else {
				document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
				document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
			}
		}
	</script>


	<table width="850" align="center">
		<tr>
			<td>
				<nav>
					<div class="logo">
						<img src="images/logo.png" alt="" class="logoimg" />
						<h4>Student Attendance Management System</h4>
					</div>
					<input type="checkbox" name="" id="click" />
					<label for="click" class="menu-btn">
						<i class="fas fa-bars"></i>
					</label>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li>
							<a href="https://www.cumminscollege.org/wp-content/uploads/2022/03/Academic-Calendar-2021-22-SEm-1-2-R3-1.pdf">Academic Calendar</a>
						</li>
						<li><a href="images/timetable.png">SY Timetable</a></li>

					</ul>
				</nav>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<h3 style="color:red;">* Uncheck the box for Absent student
				</h3>
				<div align="center">
					<?php
					include "app.php";
					?>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<form action="getattendance.php" method="post">
					<table width="200px" align="left">
						<tr>
							<td> <strong>Select date : </strong><br />
								<?php
								$dt = getdate();
								$day = $dt["mday"];
								$month = date("m");
								$year = $dt["year"];

								echo "<select name='cdate'>";
								for ($a = 1; $a <= 31; $a++) {
									if ($day == $a)
										echo "<option value='$a' selected='selected'>$a</option>";
									else
										echo "<option value='$a' >$a</option>";
								}
								echo "</select><select name='cmonth'>";
								for ($a = 1; $a <= 12; $a++) {
									if ($month == $a)
										echo "<option value='$a' selected='selected'>$a</option>";
									else
										echo "<option value='$a' >$a</option>";
								}
								echo "</select><select name='cyear'>";
								for ($a = 2010; $a <= $year; $a++) {
									if ($year == $a)
										echo "<option value='$a' selected='selected'>$a</option>";
									else
										echo "<option value='$a' >$a</option>";
								}
								echo "</select>";
								?><br><br>
							</td>
						</tr>
					</table>

					<table width="400" class="content-table">
						<thead>
						<tr>
							<th width="114"><span class="style7"><b>Roll no</b></span></th>
							<th width="152"><span class="style7"><b>F Name</b></span></th>
							<th width="152"><span class="style7"><b>L Name</b></span></th>
							<th width="110"><span class="style7"><b>Attendance</b></span></th>
						</tr>
						</thead>
						<tbody>
						<?php
						$query = "select *from student order by RollNo";
						$s = 0;
						$result = $mysqli->query($query);
						while ($rows = mysqli_fetch_array($result)) {
							$s = $s + 1;
							echo ' <tr>
							  <td width="114">' . $rows["RollNo"] . '</td>
							  <td width="152">' . $rows["F_Name"] . '</td>
							  <td width="152">' . $rows["L_Name"] . '</td>
							  <td width="110"><input type=checkbox name=' . $rows["RollNo"] . ' onclick="getatt(this.unchecked);" checked></td>
							</tr>';
						}
						?>
						</tbody>
						<tr>
							<td colspan="4">
								<div align="center">
									<input class="button1" type="submit" value="View Attendance" name="btnsubmit" />
									&nbsp;&nbsp;
								</div>
							</td>
						</tr>
					</table>
				</form>
				<br>
				<table class="below-content" width="200px" align="right" style="margin-left:35px">

					<td><b> Total Absent : </b><input type="text" id="txtAbsent" value="0" size="10" disabled="disabled" /></td>

					<td><b> Total Present : </b><input type="text" id="txtPresent" value="<?php print $s; ?>" size="10" disabled="disabled" /></td>

					<td><b> Total Strength : </b><input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled" /></td>
		</tr>
	</table>

	</td>
	</tr>
	</table>
</body>

</html>
