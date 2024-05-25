<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add Poppins font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .header {
            background: linear-gradient(to right, #0056b3, #003d7e);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .footer {
            background-color: #333;
            padding: 20px 0;
        }
        .footer a {
            color: #d5d5d5;
            text-decoration: none;
        }
        .footer h5 {
            color: #fff;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .main {
            background-image: url('img/background.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            color: #000000;
            padding: 50px 0;
            min-height: 100vh; /* Ensures the section takes at least the full viewport height */
            display: flex;
            align-items: center;
            position: relative;
        }
        .main::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3); /* Adds a dark overlay */
            z-index: 1;
        }
        .main .container {
            z-index: 2; /* Ensures the content is above the overlay */
        }
        .main h1 {
            font-size: 4rem;
            color: #292624; /* Bright yellow color for contrast */
            font-weight: 900;
        }

        .main p {
            font-size: 1.25rem;
            color: #ffffff; /* Ensure other text is also readable */
        }
        .navbar-nav {
            align-items: center;
        }

        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        .navbar-nav .nav-item .nav-link {
            color: #ffffff;
        }

        .signup-link {
            border: 2px solid #007bff;
            background-color: #007bff;
            color: #ffffff;
            padding: 8px 10px;
            border-radius: 5px;
        }


        .steps-section {
            padding: 50px 0;
            min-height: 90vh;
            display: flex;
            align-items: center;
            background-color: #f2f2f2;
        }
        .steps-section .card {
            border: none;
            background-color: #0056b3;
        }
        .steps-section p{
            color: #ffffff;
        }
        .steps-section h5{
            color: #fdc72f;
        }
        .about-us{
            background-color: rgba(0, 0, 0, 0.5);
            padding: 50px 0;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }
        .about-us h2{
            color: #ffffff;
        }
        .about-us p{
            color: #eaeaea;
        }
        .about-us img {
            max-width: 70%;
            height: auto;
            border-radius: 10px;
        }
         .employer-section {
            background-color: #ffffff;
            padding: 50px 0;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }
        .employer-section img {
            max-width: 100%;
            height: auto;
        }
        .contact-us {
            background-color: #d5d5d5;
            padding: 50px 0;
            min-height: 90vh;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logos.png" alt="TutorLink Logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login-link" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link signup-link" href="register.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Section -->
    <section class="main">
        <div class="container text-center">
            <div class="content">
                <h1 class="mb-4">Career Success Starts With the Right Job.</h1>
                <p class="lead">Hello Marinduquenos! Apply for a bright FUTURE</p>
                <form class="form-inline justify-content-center mt-3">
                    <input type="text" class="form-control form-control-lg mr-2 mb-2 mb-md-0" placeholder="Job title or keyword">
                    <button type="submit" class="btn btn-primary btn-lg">Find Job</button>
                </form>
            </div>
        </div>
    </section>

   <!-- Steps Section -->
<section class="steps-section text-center">
    <div class="container">
        <h2>Making Your Job Search Easy with 4 Steps</h2>
        <div class="row mt-4">
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-plus"></i></h5>
                        <p class="card-text">Register an account with us.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-user-edit"></i></h5>
                        <p class="card-text">Complete your profile and upload your resume.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-search"></i></h5>
                        <p class="card-text">Search and apply for jobs that match your skills.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-check-circle"></i></h5>
                        <p class="card-text">Get hired and start your career journey!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- About Us Section -->
    <section id="about" class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <img src="img/about-us-vector.png" alt="About Us Image"> <!-- Replace with your image path -->
                    
                </div>
                <div class="col-md-6 text-center">
                    <h2>About Us</h2>
                    <p>Marinduque Online Job Portal System is dedicated to connecting talented individuals in Marinduque with the right job opportunities. Our mission is to facilitate employment by providing a comprehensive platform for job seekers and employers, ensuring that the local workforce can thrive and succeed.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="employer" class="employer-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Are You an Employer?</h2>
                    <p>Join us today and start posting your job vacancies to find the perfect candidates. Our platform offers a seamless way to connect with job seekers in Marinduque, helping you to fill your positions quickly and efficiently.</p>
                    <a href="empRegister.php" class="btn btn-primary">Register Now</a>
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/employer.jpg" alt="Employer Image"> <!-- Replace with your image path -->
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section id="contact" class="contact-us">
        <div class="container">
            <h2 class="text-center">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h5>About Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Find a Job</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Help and Support</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Settings</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5>Settings</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('.scroll-link').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
