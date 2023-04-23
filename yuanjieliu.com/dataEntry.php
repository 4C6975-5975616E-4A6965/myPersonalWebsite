<html>
<title>Simple Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Custom style sheet -->
    <link rel="stylesheet" href="./style.css">
    <!-- Bootstrap CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- NavBar -->
<nav class="navbar navbar-expand-sm bg-dark sticky-top navbar-dark">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=formDemo.php>Simple Form</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=ajax.html>AJAX</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href=jquery.html>JQuery</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href=index.html>Project</a>
            </li>
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Others
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
					  <li><a class="dropdown-item" href="https://yuanjieliublog.wordpress.com/" target="_blank">Wordpress</a></li>
                      <li><a class="dropdown-item" href="Resume - Yuanjie Liu.pdf" target="_blank">Resume</a></li>
                      <li><a class="dropdown-item" href="https://www.linkedin.com/in/yuanjie-liu-b888861b7/" target="_blank">LinkedIn</a></li>
                    </ul>
                  </li>
                </ul>
            </div>
        </ul>
    </div>
</nav>

<body>
</body>
</html>

<?php
$mysqli = mysqli_connect("localhost", "yuanjiel_yliu", "lyj20001219", "yuanjiel_myfirstDB");

    /* Check the connection. */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');

$sql = "INSERT INTO students VALUES ('$fname', '$lname', '$email')";

$result = mysqli_query($mysqli, $sql) or die(mysql_error($mysqli));

	echo "<table class='table'>
			<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			</tr>";
		echo "<tr>";
		echo "<td>" . $fname . "</td>";
		echo "<td>" . $lname . "</td>";
		echo "<td>" . $email . "</td>";
		echo "</tr>
		</table>";
		echo "<p>New record created successfully</p>";
echo "<a href=formData.php><p>Get all the data in the table</p></a>";
mysqli_close($mysqli);

?>
