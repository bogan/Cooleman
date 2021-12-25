<?php $title = 'Navbar';	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Cooleman Ridge Parkcare Group</a>

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="group" data-toggle="dropdown">
                Our Group
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Mission</a>
                <a class="dropdown-item" href="#">History</a>
                <a class="dropdown-item" href="#">Meetings</a>
                <a class="dropdown-item" href="#">Work</a>
                <a class="dropdown-item" href="#">Partners</a>
                <a class="dropdown-item" href="#">Documents</a>
                <a class="dropdown-item" href="#">Contact</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="ridge" data-toggle="dropdown">
                Our Ridge
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Location</a>
                <a class="dropdown-item" href="#">Water</a>
                <a class="dropdown-item" href="#">Fire</a>
                <a class="dropdown-item" href="#">Flora</a>
                <a class="dropdown-item" href="#">Fauna</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="activities" data-toggle="dropdown">
                Our Activities
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Walking</a>
                <a class="dropdown-item" href="#">Horse Riding</a>
                <a class="dropdown-item" href="#">Bike Riding</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Our News</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">Our Gallery</a>
        </li>
    </ul>
</nav>
<br>

<div class="container">
    <h3>Demo</h3>
    <p>This example demonstrates a possible navigation bar.</p>
</div>

</body>
</html>
