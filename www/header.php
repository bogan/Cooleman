<?php $title = 'Navbar';	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cooleman Ridge Park Care Group</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <style type="text/css">

        td
        {
            padding:5px
        }

        table.news
        {
            padding:5px;
            width:100%;
            border:thin;
            border-style:solid;
            border-color:black
        }

        td.news
        {
            text-align:center;
            border:thin;
            border-style:solid
        }

        th.news
        {
            text-align:center;
            border:thin;
            border-style:solid
        }

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

        .tbc{
            color: red;
        }

        .carousel-inner img {
            width: 100%;
            height: 100%;
        }

        .sides{
            background-color: white;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: black;
            color: white;
            text-align: center;
        }

        #plantationsmap {
            height: 100%;
        }

        #areasmap {
            height: 100%;
        }

        #trailsmap {
            height: 100%;
        }

        #hillsmap {
            height: 100%;
        }

        #watermap {
            height: 100%;
        }

        #walksmap {
            height: 100%;
        }

    </style>
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
                <a class="dropdown-item" href="about.php">About</a>
                <a class="dropdown-item" href="administration.php">Administration</a>
                <a class="dropdown-item" href="membership.php">Membership</a>
                <a class="dropdown-item" href="work.php">Work</a>
                <a class="dropdown-item" href="strategy.php">Strategy</a>
                <a class="dropdown-item" href="contribute.php">Contribute</a>
                <a class="dropdown-item" href="mission.php">Mission</a>
                <a class="dropdown-item" href="meetings.php">Meetings</a>
                <a class="dropdown-item" href="group-areas.php">Group Areas</a>
                <a class="dropdown-item" href="achievements.php">Achievements</a>
                <a class="dropdown-item" href="partners.php">Partners</a>
                <a class="dropdown-item" href="documents.php">Documents</a>
                <a class="dropdown-item" href="contact.php">Contact</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="ridge" data-toggle="dropdown">
                Our Ridge
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="location.php">Location</a>
                <a class="dropdown-item" href="history.php">History</a>
                <a class="dropdown-item" href="water.php">Water</a>
                <a class="dropdown-item" href="fire.php">Fire</a>
                <a class="dropdown-item" href="flora.php">Flora</a>
                <a class="dropdown-item" href="fauna.php">Fauna</a>
                <a class="dropdown-item" href="hills.php">Hills</a>
                <a class="dropdown-item" href="trails.php">Trails</a>
                <a class="dropdown-item" href="walks.php">Walks</a>
                <a class="dropdown-item" href="plantations.php">Plantations</a>
                <a class="dropdown-item" href="weeds.php">Weeds</a>
            </div>
        </li>

        <!--<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="activities" data-toggle="dropdown">
                Our Activities
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="walking-new.php">Walking</a>
                <a class="dropdown-item" href="horseriding-new.php#">Horse Riding</a>
                <a class="dropdown-item" href="bikeriding-new.php">Bike Riding</a>
            </div>
        </li>-->

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="surveys" data-toggle="dropdown">
                Our Surveys
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="animal-survey.php">Animals</a>
                <a class="dropdown-item" href="plant-survey.php">Plants</a>
                <a class="dropdown-item" href="tree-survey.php">Trees</a>
                <a class="dropdown-item" href="blackberry-survey.php">Blackberries</a>
                <a class="dropdown-item" href="dam-survey.php">Dams</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="news.php">Our News</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="gallery.php">Our Gallery</a>
        </li>
    </ul>
</nav>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">

