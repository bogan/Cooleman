<?php $title = 'Navbar';	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DMWFMDVZJ6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DMWFMDVZJ6');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M8T7RFW');</script>
    <!-- End Google Tag Manager -->

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

        #plantations-map {
            height: 100%;
        }

        #areas-map {
            height: 100%;
        }

        #trails-map {
            height: 100%;
        }

        #hills-map {
            height: 100%;
        }

        #water-map {
            height: 100%;
        }

        #walksmap {
            height: 100%;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">


        <!-- Brand -->
        <div class="navbar-brand" style="word-wrap: break-word;">
            Cooleman Ridge Parkcare Group
        </div>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="group" data-toggle="dropdown">Our Group</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="organisation.php">Organisation</a>
                        <a class="dropdown-item" href="work">Work</a>
                        <a class="dropdown-item" href="strategy">Strategy</a>
                        <a class="dropdown-item" href="meetings">Meetings</a>
                        <a class="dropdown-item" href="partners">Partners and Other Park Care Groups</a>
                        <a class="dropdown-item" href="documents">Documents</a>
                        <a class="dropdown-item" href="contact">Contact</a>
                    </div>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="ridge" data-toggle="dropdown">Our Ridge</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="location">Location</a>
                        <a class="dropdown-item" href="history">History</a>
                        <a class="dropdown-item" href="water">Water</a>
                        <a class="dropdown-item" href="fire">Fire</a>
                        <a class="dropdown-item" href="flora">Flora</a>
                        <a class="dropdown-item" href="fauna">Fauna</a>
                        <a class="dropdown-item" href="hills">Hills</a>
                        <a class="dropdown-item" href="trails">Trails</a>
                        <a class="dropdown-item" href="walks">Walks</a>
                        <a class="dropdown-item" href="plantations">Plantations</a>
                        <a class="dropdown-item" href="weeds">Weeds</a>
                    </div>
                </li>

                <!--<li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="activities" data-toggle="dropdown">Our Activities</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="walking-new">Walking</a>
                        <a class="dropdown-item" href="horseriding-new#">Horse Riding</a>
                        <a class="dropdown-item" href="bikeriding-new">Bike Riding</a>
                    </div>

                </li>-->

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="surveys" data-toggle="dropdown">Our Surveys</a>

                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="animal-survey">Animals</a>
                        <a class="dropdown-item" href="plant-survey">Plants</a>
                        <a class="dropdown-item" href="tree-survey">Trees</a>
                        <a class="dropdown-item" href="blackberry-survey">Blackberries</a>
                        <a class="dropdown-item" href="dam-survey">Dams</a>
                    </div>

                </li>

                <li class="nav-item">
                    <a class="nav-link" href="newsletters.php">Our News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="gallery">Our Gallery</a>
                </li>

            </ul>

            <div class="ml-auto">
                <script async src="https://cse.google.com/cse.js?cx=008804451297429151083:uvfpx0zrsak"></script>
                <div class="gcse-search"></div>
            </div>

        </div>

</nav>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>


