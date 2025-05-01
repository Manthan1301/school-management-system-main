<?php include('shared/_header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sari Primary School - Management System</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #4361ee;
            --primary-hover: #3a56d4;
            --primary-light: #e6e9ff;
            --secondary: #6c757d;
            --light: #f8f9fa;
            --dark: #212529;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f5f7fa;
            overflow-x: hidden;
        }

        /* Logo Styles */
        .navbar-brand {
            display: flex;
            align-items: center;
        }
        
        .school-logo {
            height: 40px;
            width: auto;
            margin-right: 10px;
            object-fit: contain;
        }

        /* Button Styles */
        .btn {
            transition: var(--transition);
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 20px;
            position: relative;
            overflow: hidden;
            border: none;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white !important;
            box-shadow: 0 4px 6px rgba(67, 97, 238, 0.3);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-hover);
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(67, 97, 238, 0.4);
        }
        
        .btn-outline-primary {
            color: var(--primary);
            border: 2px solid var(--primary);
            background-color: transparent;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white !important;
            box-shadow: 0 4px 8px rgba(67, 97, 238, 0.3);
        }
        
        .btn-light {
            background-color: white;
            color: var(--primary);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .btn-light:hover {
            background-color: #f8f9fa;
            color: var(--primary);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        .btn-primary, .btn-primary:hover, .btn-primary:focus,
        .btn-outline-primary:hover, .btn-outline-primary:focus {
            color: white !important;
        }

        /* Indian-themed colors */
        .indian-flag-colors {
            background: linear-gradient(to right, #FF9933, white, #138808);
            height: 4px;
            width: 100%;
            margin-bottom: 10px;
        }
        
        .school-motto {
            font-style: italic;
            color: #555;
            border-left: 3px solid var(--primary);
            padding-left: 15px;
        }

        /* Testimonials Section */
        .testimonials {
            background-color: var(--light);
            padding: 80px 0;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            height: 100%;
            transition: var(--transition);
        }
        
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
            margin: 0 auto 20px;
        }
        
        .testimonial-quote {
            position: relative;
            padding: 0 20px;
        }
        
        .testimonial-quote:before {
            content: """;
            font-family: Georgia, serif;
            font-size: 60px;
            color: var(--primary-light);
            position: absolute;
            left: -10px;
            top: -20px;
            line-height: 1;
        }

        /* Navbar */
        .navbar {
            border-bottom: 3px solid var(--primary);
            padding: 10px 0;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
        }

        /* Feature Cards */
        .feature-card {
            transition: var(--transition);
            border: none;
            border-top: 4px solid var(--primary);
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        /* Stats Card */
        .stats-card {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <!-- Navbar with improved logo display -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <img src="1.png" alt="Sari Primary School Logo" class="school-logo">
                <span class="d-none d-sm-inline">Sari Primary School</span>
                <span class="d-inline d-sm-none">SPS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="login.php" class="btn btn-primary btn-ripple">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="indian-flag-colors"></div>
                    <h1 class="display-4 fw-bold mb-3">Sari Primary <span class="text-primary">School</span></h1>
                    <p class="school-motto mb-4">"विद्या ददाति विनयम्" - Knowledge Bestows Humility</p>
                    <p class="lead text-secondary mb-4">
                        Established in 1985, Sari Primary School provides quality education to children in Ahmedabad district. 
                        Our digital platform connects teachers, students, and parents for better learning outcomes.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="login.php" class="btn btn-primary btn-lg btn-ripple px-4">Student Portal</a>
                        <a href="login.php" class="btn btn-primary btn-lg btn-ripple px-4">Teacher's Login</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative">
                        <img src="school.png" alt="Students at Sari Primary School" class="img-fluid rounded-3 shadow">
                        <div class="stats-card shadow-sm position-absolute bottom-0 start-50 translate-middle-x">
                            <div class="d-flex justify-content-center gap-4">
                                <div class="text-center">
                                    <h3 class="mb-0 text-primary">650+</h3>
                                    <p class="mb-0 text-muted small">Students</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="mb-0 text-primary">11</h3>
                                    <p class="mb-0 text-muted small">Teachers</p>
                                </div>
                                <div class="text-center">
                                    <h3 class="mb-0 text-primary">38</h3>
                                    <p class="mb-0 text-muted small">Years</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Our School Features</h2>
                <p class="text-secondary mx-auto" style="max-width: 600px;">
                    Modern education with traditional values in Ahmedabad
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 d-flex">
                    <div class="card shadow-sm h-100 w-100 feature-card">
                        <div class="card-body p-4">
                            <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-book text-primary fs-4"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Digital Attendance</h3>
                            <p class="text-secondary mb-0">
                                Real-time attendance tracking with SMS alerts to parents in Gujarati and Hindi.
                            </p>
                            <div class="mt-3">
                                <button class="btn btn-primary btn-sm mt-2 btn-ripple feature-btn">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card shadow-sm h-100 w-100 feature-card">
                        <div class="card-body p-4">
                            <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-rupee-sign text-success fs-4"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Fee Management</h3>
                            <p class="text-secondary mb-0">
                                Online fee payment with UPI and local bank integration for convenience.
                            </p>
                            <div class="mt-3">
                                <button class="btn btn-primary btn-sm mt-2 btn-ripple feature-btn">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="card shadow-sm h-100 w-100 feature-card">
                        <div class="card-body p-4">
                            <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-language text-info fs-4"></i>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Multilingual</h3>
                            <p class="text-secondary mb-0">
                                Interface available in Gujarati, Hindi, and English for all stakeholders.
                            </p>
                            <div class="mt-3">
                                <button class="btn btn-primary btn-sm mt-2 btn-ripple feature-btn">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parent Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">What Parents Say</h2>
                <p class="text-secondary mx-auto" style="max-width: 600px;">
                    Hear from our school community about their experiences
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="images/parent1.jpg" alt="Ramesh Patel" class="testimonial-img">
                        <div class="testimonial-quote">
                            <p class="mb-4">"In the Sari Primary School All Teachers are highly Quilified and having more than 20 years of experience."</p>
                            <h5 class="fw-bold mb-1">Ramesh Patel</h5>
                            <p class="text-muted small">Parent of Std. 4 Student</p>
                            <div class="mt-3 text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="images/parent2.jpg" alt="Geeta Sharma" class="testimonial-img">
                        <div class="testimonial-quote">
                            <p class="mb-4">"Getting SMS alerts in Hindi about school events has been very helpful for our family."</p>
                            <h5 class="fw-bold mb-1">Geeta Sharma</h5>
                            <p class="text-muted small">Parent of Std. 2 Student</p>
                            <div class="mt-3 text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card text-center">
                        <img src="images/parent3.jpg" alt="Vijay Desai" class="testimonial-img">
                        <div class="testimonial-quote">
                            <p class="mb-4">"School Provides monthly report of my child's progress which helps me to track his performance."</p>
                            <h5 class="fw-bold mb-1">Vijay Desai</h5>
                            <p class="text-muted small">Parent of Std. 5 Student</p>
                            <div class="mt-3 text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 mb-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2 class="fw-bold mb-3">Say Something about our School</h2>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="comments.php" class="btn btn-primary btn-ripple">Give A Feedback</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Sari Primary School</h5>
                    <p class="small">
                        Sari Primary School, Sari Gam, Opp Intas Pharma<br>
                        Taluka: Sanand<br>
                        District: Ahmedabad, Gujarat<br>
                        Recognized by Gujarat State Board
                    </p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Our School</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Academic Calendar</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact Principal</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Contact Us</h5>
                    <p class="small mb-1"><i class="fas fa-map-marker-alt me-2"></i> Sari Primary School</p>
                    <p class="small mb-1"><i class="fas fa-phone me-2"></i> +91 9586110935</p>
                    <p class="small mb-0"><i class="fas fa-envelope me-2"></i> sariprimaryschool.1@gmail.com</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-2"><i class="fab fa-whatsapp fa-lg"></i></a>
                        <a href="https://www.facebook.com/share/g/15ip8Aaxr5/?mibextid=wwXIfr" class="text-white me-2"><i class="fab fa-facebook fa-lg"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center small">
                <p class="mb-0">© 2023 Sari Primary School, Ahmedabad. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-ripple');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const rect = this.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const ripple = document.createElement('span');
                    ripple.className = 'ripple-effect';
                    ripple.style.left = `${x}px`;
                    ripple.style.top = `${y}px`;
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            const featureButtons = document.querySelectorAll('.feature-btn');
            featureButtons.forEach(button => {
                button.addEventListener('mouseenter', function() {
                    this.innerHTML = `<i class="fas fa-arrow-right me-1"></i> ${this.textContent.trim()}`;
                });
                
                button.addEventListener('mouseleave', function() {
                    this.innerHTML = `Learn More`;
                });
            });
        });
    </script>
</body>
</html>