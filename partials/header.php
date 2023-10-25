<!DOCTYPE html>
<html lang="en">

<head>
    <title>DeKUT - Responsible Computing</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/images/dedanlogo-removebg-preview.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
    }




    .navbar-brand {
        padding-left: 10px;

    }

    /* Default styles for the list */
    .list-nav {
        text-align: center;
        margin-left: 50px;

        /* Center the list on large screens */
    }

    .nav-link:hover {
        background-color: #051044;
        color: white;
    }

    /* Media query for mobile screens */
    @media (max-width: 768px) {
        .list-nav {
            text-align: left;
            /* Align the list to the far left on mobile screens */

        }
    }



    .top-bar {
        background-color: #E8AB28;
        color: black;
        padding: 5px;
    }

    .top-content {
        font-weight: 500;
        padding-left: 10px;
    }

    .main-navbar {
        background-color: white;
        color: black;
        font-size: 18px;
        font-weight: 600;
        align-items: center;
        padding-left: 12px;
    }

    .list-nav {
        text-align: center;
    }

    .nav-link {
        color: black;
    }

    .mozilla-btn {
        background-color: #0A1445;
    }

    .footer-main-class {
        background-color: #051044;
    }
</style>

<body>
    <div class="top-bar container-fluid">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <span class="top-content mt-1">Responsible Computing in Action</span>
            </div>
            <div class="col-12 col-md-6 text-end">
                <a class="btn btn-warning text-black me-2" href="stieconference.php">DeKUT-STI&E Conference 2024</a>
                <a class="btn btn-primary text-white" href="responsiblecomputingclub.php">Careers</a>
            </div>
        </div>
    </div>

    <nav class="main-navbar navbar navbar-expand-lg border-bottom ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="assets/images/dekutrclogo.jpg" alt="Avatar logo" style="width: auto; height: 55px;" class="me-2">
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
                        <a class="nav-link" href="conferences.php">Conferences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="responsiblecomputingclub.php">RC-Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resources.php">Resources</a>
                    </li>
                    <li class="nav-item mozilla-btn">
                        <a href="#mozilla-section" class="nav-link text-white">Mozilla-Challenge</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>