<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>

<div class="club-sec container-fluid">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Responsible Computing Club Activities</h1>
                <p>The Responsible Computing (RC) Club is a vibrant community of students and faculty members dedicated to promoting ethical and responsible computing practices. Our club activities encompass a wide range of initiatives and events that aim to foster a culture of responsible computing among our members and the larger community.</p>
                <p>Every semester, we organize informative workshops and seminars on cybersecurity, data privacy, and digital ethics. These sessions feature guest speakers and provide insights into current trends and challenges in the tech industry.</p>
                <p>Our club also hosts coding competitions and hackathons, encouraging members to use their programming skills for social good. Participants have the opportunity to develop solutions that address real-world issues.</p>

                <!-- Embedding PDF -->

                <div class="container mt-5">
                    <h2>Club Registration</h2>
                    <embed src="assets/pdfs/Club Registration.pdf" type="application/pdf" width="100%" height="1050px" />
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <img src="assets/images/intern.jpg" class="rounded img-fluid ">
                <div class="mt-3 p-3">
                    <p>Stay updated with our club's activities through our newsletter and social media platforms. Feel free to join us, learn, and contribute to the world of responsible computing.</p>
                </div>
            </div>

            <div id="careers" class="col-lg-8 mt-5">
                <h2 class="fw-bold">Internship Opportunities</h2>
                <p>The RC Club offers exclusive internship opportunities for its members, providing hands-on experience in responsible computing and related fields. These internships are designed to help students apply their knowledge in real-world settings while making a positive impact.</p>
                <p>Interns have the chance to work on projects that involve cybersecurity, data privacy, software development, and ethical AI. These projects are often in collaboration with industry partners, offering a valuable networking experience.</p>
                <button class="btn btn-primary">Vacancies</button>
                <p class="mt-4">No vacancies at the moment.</p>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer.php file
include 'partials/footer.php';
?>