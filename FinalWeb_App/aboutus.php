<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
    <header>
		<nav class="navbar navbar-light justify-content fs-1 mb-3" style="background-color: #00ff5573;">
		<h1>Student Registration</h1>
    <div class= "btn-right"> 
	
			<a href="add_new.php" class="btn btn-dark">Add New</a>
			<a href="index2.php" class="btn btn-dark">Student List</a>
			<a href="aboutus.php" class="btn btn-dark">About us</a>
			<a href="logout.php" class="btn btn-dark">Logout </a>
          </div>
        </nav>
    </header>
</head>
<body>
<center>
<h1 class="heading"> Programmers </h1>

<!-- review section  -->

<section class="review"><link rel="stylesheet" type="text/css" href="css/aboutus.css">

    <div class="box">
        <div class="student">
            <div class="student-info">
                <img src="image/clara.jpg" alt="width="400" height="400">
                <div class="info">
                    <h3>Claire Nullas</h3>
                    <span>Programmer</span>
                </div>
            </div>
        </div>
    </div>
<br>

    <div class="box">
        <div class="student">
            <div class="student-info">
                <img src="image/lapida.png" alt=""width="400" height="400">
                <div class="info">
                    <h3>Joy Libertino</h3>
                    <span>Emotional Support</span>
                </div>
            </div>
        </div>
    </div>
    </div>   
    </center>
    <br>
    <?php include 'footer.php'; ?>
</body>
</html>