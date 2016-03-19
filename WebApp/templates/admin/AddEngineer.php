<!DOCTYPE HTML>
<html>
<head>
	<title> Add Engineer </title>
	<!-- Importing the CSS and the font for the website donot alter the section below -->
	<link rel="stylesheet" type="text/css" href="../../styles/prettify.css">
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
	<!-- Importing ends here -->
</head>

<body>
<div id="container">	
	<!-- This is the top nav bar donot make changes here -->
	<nav id="top-nav">
		<ul id="top-nav-list">
			<li class="top-nav-item" id="logo"> <img src="../../images/logo.png" alt="logo" id="logo-image"> </li>
			
			<li class="top-nav-item" id="logout-button"> <a id="logout-link" href="#"> Logout </a> </li>
		</ul>
	</nav>
	<!-- Top Nav Bar ends here -->

	<!-- Side bar is below make changes to li(id), li(content) rest should not be changed and donot remove any classes or ids except for the ones that contain the names of the list items -->
	<aside id="side-nav">
		<ul id="side-nav-list">
			<li id="add-project" class="side-nav-items"> <a href="AddProject.html" class="nav-link"> Add Project </a> </li>
			<li id="delete-project" class="side-nav-items"> <a href="DeleteProject.html" class="nav-link"> Delete Project </a> </li>
			<li id="add-client" class="side-nav-items"> <a href="AddClient.html" class="nav-link"> Add Client </a> </li>
			<li id="add-engineer" class="side-nav-items"> <a href="AddEngineer.html" class="nav-link"> Add Engineer / Project Manager </a> </li>
			<li id="session-tracking" class="side-nav-items"> <a href="SessionTracking.html" class="nav-link"> Session Tracking </a> </li>
			<li id="complaint-status" class="side-nav-items"> <a href="ComplaintStatus.html" class="nav-link"> Complaint Status </a> </li>
		</ul>
	</aside>
	<!-- Side bar ends here -->

	<!-- This is the section where you'll add the main content of the page -->
	<div id="main">
		<h1 class="main-heading"> Add Engineer / Project Manager </h1>
		<form>
			<input type="text" placeholder="Engineer Name" id="engineer-name"> <br/>
			<input type="text" placeholder="Engineer ID" id="engineer-id"> <br/>
			<select>
				<?php
						$dbhost = 'localhost';
						$dbuser = 'root';
						$dbpass = '';
						$dbname = 'cmt';

						$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
						
						$sql = "SELECT * FROM project";
						$result = $conn->query($sql);
						
						echo "<h1>Hello</h1>";
						
						while($project = $result->fetch_assoc());
						{
							echo "<option value=" . $project['name']. ">" . $project['name']. "</option>";
						}
						
						$conn->close();
				?>
			</select> <br/>
			<select>
				<option> Module </option>
			</select> <br/>
			<label id="radio-label"> Project Manager: <input type="radio" class="radio-input" value="y">Yes <input type="radio" class="radio-input" value="n">No </label> <br/> 			
			<input type="submit" value="Add Client" class="submit-delete-button">
		</form>
	</div>
	<!-- The main content ends -->
</div>
</body>
</html>	
