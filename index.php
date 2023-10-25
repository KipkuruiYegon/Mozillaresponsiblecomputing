<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>

<!-- Welcome Section -->
<div class="container-fluid video-container welcome-div p-5 text-white text-center shadow justify-content-center" style="position: relative; height: 77vh;">
  <video src="assets/videos/planet-rotate.mp4" autoplay loop muted style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: -1;"></video>
  <div class="d-flex flex-column justify-content-center align-items-center h-100">
    <h1 class="display-4 mt-5 p-1 mb-3 font-weight-bold text-center" style="font-size: 60px;">DeKUT Responsible Computing</h1>
    <p class="" style="font-style: italic;">Navigating the Digital Frontier with Responsibility, Secure, Ethical & Inclusive Computing</p>
  </div>
</div>


<div class="container-fluid bg-white mt-5">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h2 class="text-center">Exploring Responsible Computing Initiatives</h2>
        <p class="text-justify mt-3">
          In today's rapidly evolving digital landscape, responsible computing stands as the guiding light that illuminates our path through the complex terrain of technology. It is the compass that ensures we navigate the digital frontier with security, ethics, and inclusivity at the forefront. Responsible computing is our commitment to harnessing the incredible power of technology while being mindful of the profound impact it has on individuals, communities, and the world as a whole. It's about recognizing that every line of code, every algorithm, and every innovation carries with it a responsibility to safeguard privacy, uphold ethics, and promote inclusivity.
        </p>
      </div>
      <div class="col-md-6">
        <img src="assets/images/chairglobe-min.jpg" alt="Image" class="img-fluid">
      </div>

    </div>

    <div class="row mt-5 mb-5">

      <div class="col-md-6">
        <img src="assets/images/groupbudy.png" alt="Image" class="img-fluid center-image" style="border-radius: 40px;">
      </div>

      <div class="col-md-6 mt-5 mission-div pt-5">
        <h2 class="text-center">Our Mission</h2>
        <p class="text-justify mt-3">
          Our mission is to integrate ethics and responsible computing principles into education, research, and industry practices. We strive to empower the next generation of computer scientists with the knowledge and skills to make ethical decisions, protect privacy, and create technology that benefits everyone.
        </p>
      </div>

    </div>

    <div class="row mt-5 align-items-center" style="padding-top: 100px;">

      <h2 class="text-center">Why Responsible Computing ?</h2>
      <p class="text-justify mt-3">
        Responsible computing goes beyond mere functionality; it champions the cause of creating a digital world where trust, fairness, and accessibility are fundamental pillars. It's a dedication to ensuring that our innovations uplift rather than harm, protect rather than intrude, and include rather than exclude. In an age where technology permeates every aspect of our lives, responsible computing is our moral compass, guiding us to a future where the digital landscape is not only advanced but also just, secure, and equitable. It is a commitment to building a digital world that benefits all, leaving no one behind, and ensuring that technology is a force for good in our interconnected global community.
      </p>
    </div>

  </div>
</div>

<!-- Mozilla Challenge Section -->
<section id="mozilla-section" style="padding-top: 100px;">
  <div class="container-fluid bg-white">
    <div class="container mb-5 bg-white">
      <div class="col-md-12">
        <h2 class="text-center">Mozilla Challenge</h2>
        <div class="col-12 text-center mt-4">
          <div class="d-flex justify-content-center align-items-center border-rounded">
            <img src="assets/images/mozilla.png" alt="Image" class="img-fluid center-image text-center mx-auto" style="border-radius: 5px; width: auto; max-width: 100%;">
          </div>
        </div>
        <div class="container mt-5 p-2">
          <p class="text-justify">
            Over the years, computer science studies have advanced significantly. However, there appears to be a significant void in the inclusivity of responsible computing principles in modern-day courses. Today, most computer science courses do not consider ethics or responsible computing concerns when teaching students. But, like other disciplines, computer science students ought to learn and adhere to the fundamental ethical and responsible computing principles for a better computing community. Thus, we must find a pathway to integrate responsible computing from our lecture halls into society.
          </p>
          <p class="text-justify">
            To address the above challenge, Mozilla Foundation, through the Responsible Computing Challenge, announced a call to award ten grants from a pool of $250,000 to innovation hubs and accredited Universities in Kenya that integrate ethics into their computer science curricula. The challenge promotes the conception, development, and piloting of computer science curricula content that enables lecturers and students to consider the impact of responsible computing in society.
          </p>
          <!-- Add more content here -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/footer.php';
?>