<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>

<div class="container-fluid p-2 d-flex justify-content-between align-items-center" style="background-color: #08021f;">

  <!-- Social media icons/links in reverse order -->
  <div class="d-flex align-items-center">
    <a href="#" class="text-white mx-2"><i class="bi bi-linkedin" style="font-size:large"></i></a>
    <a href="#" class="text-white mx-2"><i class="bi bi-facebook" style="font-size:large"></i></a>
    <a href="#" class="text-white mx-2"><i class="bi bi-twitter" style="font-size:large"></i></a>
    <a href="#" class="text-white mx-2"><i class="bi bi-instagram" style="font-size:large"></i></a>
    <!-- Add more social media icons/links as needed in reverse order -->
  </div>

  <div class="d-flex me-5">

    <a href="#mozilla-section" class="btn btn-primary p-2 me-2 ">Mozilla Challenge</a>
    <a href="#mozilla-section" class="btn btn-light p-2">Sign Up</a>


  </div>
</div>





<nav class="navbar navbar-expand-lg shadow-sm " style="background-color:;height:;">
  <div class="container-fluid ">
    <a class="navbar-brand display fw-bold" style="font-size: 32px;" href="">
      <img src="../assets/images/Corporate Tech Computer Logo.PNG" alt="Avatar Logo" style="width:180px;height: 55px;" class=" me-2">
    </a>
    <span class="fw-bold" style="font-family: ;">Responsible Computing in Action</span>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">

      <ul class="navbar-nav ms-auto text-center mt-2 mt-lg-0 forumnavbarlist me-5 mr-5">
        <li class="nav-item">
          <a class="nav-link  p-2 fw-bold" href="index.php" style="font-size:1.2rem">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2 fw-bold" href="" style="font-size:1.2rem">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  p-2 fw-bold" href="events.php" style="font-size:1.2rem">Events</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link p-2 fw-bold" href="" style="font-size:1.2rem">Contacts</a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<!-- welcome -->
<div class="container-fluid video-container welcome-div p-5 mt-1 text-white text-center shadow justify-content-center" style="margin-top:; position: relative;height:auto">
  <video src="../assets/videos/planet.mp4" autoplay loop muted style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;">
  </video>
  <h1 class="display-4 mt-5 p-1 mb-3 font-weight-bold bg-success">DeKUT-Responsible Computing</h1>
  <p class="lead " style="font-style:italic;">Navigating the Digital Frontier with Responsibility: Secure, Ethical, and Inclusive Computing</p>
</div>



<div class="container-fluid bg-white" style="padding-top: 70px;">
  <div class="container mb-5 bg-white">
    <div class="row">

      <div class="col-md-8">
        <h2 class="text-center" style="font-family: Roboto; color:#08021f;">Join the Industry Experts</h2>
        <p class="lead fw-medium" style="font-family: Roboto; font-size: large;">
          In today's rapidly evolving digital landscape, responsible computing stands as the guiding light that illuminates our path through the complex terrain of technology. It is the compass that ensures we navigate the digital frontier with security, ethics, and inclusivity at the forefront. Responsible computing is our commitment to harnessing the incredible power of technology while being mindful of the profound impact it has on individuals, communities, and the world as a whole. It's about recognizing that every line of code, every algorithm, and every innovation carries with it a responsibility to safeguard privacy, uphold ethics, and promote inclusivity.
        </p>
      </div>
      <div class="col-md-4">
        <img src="../assets/images/chairglobe-min.png" alt="Image" class="img-fluid">
      </div>

    </div>

    <div class="row mt-3">

      <div class="col-md-4">
        <img src="../assets/images/groupbusy.jpg" alt="Image" class="img-fluid center-image">
      </div>

      <div class="col-md-8">
        <h2 class="text-center" style="font-family: Roboto; color:#08021f;">Our Mission</h2>
        <p class="lead fw-medium" style="font-family: Roboto; font-size: large;">
          Responsible computing goes beyond mere functionality; it champions the cause of creating a digital world where trust, fairness, and accessibility are fundamental pillars. It's a dedication to ensuring that our innovations uplift rather than harm, protect rather than intrude, and include rather than exclude. In an age where technology permeates every aspect of our lives, responsible computing is our moral compass, guiding us to a future where the digital landscape is not only advanced but also just, secure, and equitable. It is a commitment to building a digital world that benefits all, leaving no one behind, and ensuring that technology is a force for good in our interconnected global community.</p>
        </p>
      </div>


    </div>

    <div class="row mt-3">

      <div class="col-md-8">
        <h2 class="text-center" style="font-family: Roboto; color:#08021f;">Our Vision</h2>
        <p class="lead fw-medium" style="font-family: Roboto; font-size: large;">

          Our mission is to integrate ethics and responsible computing principles into education, research, and industry practices. We strive to empower the next generation of computer scientists with the knowledge and skills to make ethical decisions, protect privacy, and create technology that benefits everyone.
        </p>
      </div>
      <div class="col-md-4">
        <img src="../assets/images/" alt="Image" class="img-fluid">
      </div>

    </div>


  </div>













</div>

<section id="mozilla-section">
  <div class="container-fluid bg-white" style="padding-top: 70px;">
    <div class="container mb-5 bg-white">




      <div class="col-md-12">
        <h2 class="text-center" style="font-family: Roboto; color:#08021f;">Mozilla Challenge</h2>

        <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
          <img src="../assets/images/groupbusy.jpg" alt="Image" class="img-fluid center-image">
        </div>





        <div class="container">
          <p style="font-family: Roboto; font-size: large;">
            Over the years, computer science studies have advanced significantly. However, there appears to be a significant void in the inclusivity of responsible computing principles in modern-day courses. Today, most computer science courses do not consider ethics or responsible computing concerns when teaching students. But, like other disciplines, computer science students ought to learn and adhere to the fundamental ethical and responsible computing principles for a better computing community. Thus, we must find a pathway to integrate responsible computing from our lecture halls into society.
          </p>

          <p style="font-family: Roboto; font-size: large;">
            To address the above challenge, Mozilla Foundation, through the Responsible Computing Challenge, announced a call to award ten grants from a pool of $250,000 to innovation hubs and accredited Universities in Kenya that integrate ethics into their computer science curricula. The challenge promotes the conception, development, and piloting of computer science curricula content that enables lecturers and students to consider the impact of responsible computing in society.
          </p>

          <p style="font-family: Roboto; font-size: large;">
            The School of Computer Science and Information Technology in DeKUT submitted and competitively won a grant proposal titled: “Mainstreaming Ethics Risk in Computer Programming,” which sought to integrate ethics and responsible computing in teaching Object-Oriented Programming among second-year computing students, with students implementing the ethical principles in an end-of-course project.” The project aims to provide an opportunity for computer science students to learn and adhere to the fundamental principles of ethical and responsible computing to contribute towards a responsible computing community.
          </p>

          <p style="font-family: Roboto; font-size: large;">
            The team seeks to achieve the following:
          </p>

          <ul style="font-family: Roboto; font-size: large;">
            <li style="font-family: Roboto; font-size: large;">Conduct research and contribute towards the Mozilla Foundation objective of mainstreaming responsible computing in teaching computer science courses;</li>
            <li style="font-family: Roboto; font-size: large;">Develop an Ethics Assessment Tool that can be used to assess the extent of ethics and responsible computing integration in computing curricula;</li>
            <li style="font-family: Roboto; font-size: large;">Mainstream ethics teaching in one of the Computer Science course in the current curriculum, i.e., CCS 2211: Object Oriented Programming unit; and</li>
            <li style="font-family: Roboto; font-size: large;">To develop a Software Projects’ Ethics Assessment Tool, that can be used to evaluate if a program designed by students meets the responsible computing threshold.</li>
          </ul>

          <p style="font-family: Roboto; font-size: large;">
            It provides an opportunity for computer science students to learn and adhere to the fundamental ethical and responsible computing principles and consider the social impacts for a better computing community.
          </p>

          <p style="font-family: Roboto; font-size: large;">
            The team takes pride in advancing the DeKUT University motto, “Better Life through Technology,” as premised on this project.
          </p>
        </div>


      </div>

    </div>
  </div>

</section>






<br>

<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/footer.php';
?>