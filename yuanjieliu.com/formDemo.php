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

<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  let y = document.forms["myForm"]["lname"].value;
  if (x == "") {
    alert("First name must be filled out");
    return false;
  }
  if (y == "") {
    alert("Last name must be filled out");
    return false;
  }
}

function validateLastName() {
  let x = document.forms["myForm"]["lname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
<body>
	<h1>Simple Form</h1>
	<div class="form">
	<form name="myForm" onsubmit="return validateForm()" action="dataEntry.php" method="post">
		<label for="fname">First name:</label><br>
		<input type="text" id="fname" name="fname"><br><br>
		<label for="lname">Last name:</label><br>
		<input type="text" id="lname" name="lname"><br><br>
		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email"><br><br>
		<input type="submit" value="Submit">
	</form>
	</div>
	<h3>Report: Output of all table rows</h3>
	<a href=formData.php><p>Get all the data in the table</p></a>
</body>
</html>