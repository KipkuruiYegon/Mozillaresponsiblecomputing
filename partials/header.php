<!DOCTYPE html>
<html lang="en">

<head>
    <title>DeKUT - Responsible Computing</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/dedanlogo-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap') .welcome-title {
        font-size: 55px;
        font-weight: 600;
    }

    body {
        font-family: "DM Sans", sans-serif;
    }



    .navbar-brand {
        padding-left: 40px;
    }

    /* Default styles for the list */
    .list-nav {
        text-align: center;
        font-weight: 600;
        margin-left: 15px;
        /* Center the list on large screens */
    }

    .nav-link:hover {
        color: white;
        background-color: #051044;
        border-radius: 3px;
    }

    /* Media query for mobile screens */
    @media (max-width: 768px) {
        .list-nav {
            text-align: left;
            /* Align the list to the far left on mobile screens */
        }
    }

    .top-bar {
        background-color: #e8ab28;
        color: black;

    }

    .top-content {
        font-weight: 500;

    }

    .main-navbar {
        background-color: white;
        color: black;
        font-size: 18px;
        font-weight: 600;
        border-top: 8px solid #e8ab28;

    }

    .list-nav {
        text-align: center;
    }

    .nav-link {
        color: black;
    }

    .mozilla-btn {
        background-color: #0a1445;
        color: white;
        border-radius: 5px;
        border: 1px solid yellow;

    }

    .readmore {
        background-color: #051044;
        color: white;
        border-radius: 5px;
        border: 1px solid yellow;

    }

    .mozilla-btn:hover {
        background-color: yellow;
        border-radius: 5px;
        border: 1px solid #051044;
        color: #051044;

    }



    /* Custom CSS for Welcome Section */
    .welcome-section {
        padding-top: 80px;
        position: relative;

    }

    .events-sec {
        padding-top: 80px;
    }

    .club-sec {
        padding-top: 80px;

    }

    .resource {
        padding-top: 80px;
    }

    .video-container {
        height: 450px;
    }

    .welcome-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
        /* You can adjust z-index as needed */
    }


    .footer-main-class {
        background-color: #051044;
    }

    .grain {
        padding-top: 70px;
    }

    .oop {
        padding-top: 70px;

    }

    .planet-video {
        position: relative;
        height: ;
    }

    .exploring-content {}



    .mission {

        justify-content: space-evenly;
    }

    .why {}

    .why-space {}

    .mozilla {}

    .logo {
        height: 55px;
    }

    .buddies {
        margin-top: 20px;

    }

    .mission-title {
        margin-top: 90px;

    }

    .challenge-title {
        padding-top: 50px;
    }

    .chalenge-desc {
        padding-bottom: 15px;
    }

    div.proposals h2 {
        font-size: 22px;
        font-weight: bold;
    }

    div.proposals h3 {
        font-size: 18px;
        font-weight: bold;
    }

    div.proposals p {
        font-weight: 500;
    }

    .africa {
        height: 250px;
        /* object-fit: cover; */

    }

    /* CSS for fullscreen overlay */
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 9999;
    }

    .overlay img {
        display: block;
        margin: auto;
        max-width: 90%;
        max-height: 90%;
        margin-top: 5%;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
    }


    .puzzle {
        display: flex;
        flex-wrap: wrap;
    }

    .piece {
        flex: 1 1 30%;
        /* Adjust the width of each piece */
        margin: 5px;
        /* Adjust the spacing between pieces */
    }

    .piece img {
        width: 100%;
        height: auto;
        display: block;
    }
</style>

<body>


    <nav class="main-navbar navbar navbar-expand-lg border-bottom p-2 fixed-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="assets/images/dekutrclogo.jpg" alt="Avatar logo" class="logo me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav list-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="responsiblecomputingclub.php">RC-Club</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" class="nav-link" href="grain.php">GRAIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resources.php">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="responsiblecomputingclub.php#careers">Careers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Mentorship</a>
                    </li>

                    <li class="nav-item ">
                        <a href="index.php#mozilla-section" class=" mozilla-btn nav-link">Mozilla-Challenge</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>