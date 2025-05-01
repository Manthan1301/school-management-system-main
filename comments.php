<?php include('shared/_header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback & Comments - Sari Primary School</title>
    
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

        /* Comment Section Styles */
        .comment-section {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        .comment-card {
            background-color: var(--light);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            border-left: 4px solid var(--primary);
            transition: var(--transition);
        }
        
        .comment-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        
        .comment-author {
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .comment-date {
            font-size: 0.8rem;
            color: var(--secondary);
            margin-bottom: 10px;
        }
        
        .comment-form {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .form-label {
            font-weight: 600;
        }
        
        /* Inherit all other styles from the reference page */
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

        /* Navbar */
        .navbar {
            border-bottom: 3px solid var(--primary);
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="comments.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a href="login.php" class="btn btn-primary btn-ripple">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <div class="indian-flag-colors mx-auto mb-3" style="max-width: 300px;"></div>
                        <h1 class="fw-bold mb-3">Share Your Feedback</h1>
                        <p class="lead text-secondary">
                            We value your thoughts and suggestions about Sari Primary School
                        </p>
                    </div>
                    
                    <!-- Comment Form -->
                    <div class="comment-form mb-5">
                        <h3 class="fw-bold mb-4 text-center">Leave a Comment</h3>
                        <form id="commentForm">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="relationship" class="form-label">Your Relationship</label>
                                <select class="form-select" id="relationship" required>
                                    <option value="" selected disabled>Select one</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Student">Student</option>
                                    <option value="Alumni">Alumni</option>
                                    <option value="Community Member">Community Member</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label">Your Feedback</label>
                                <textarea class="form-control" id="comment" rows="5" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-4">Submit Feedback</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Comments Section -->
                    <div class="comment-section">
                        <h3 class="fw-bold mb-4 text-center">Recent Feedback</h3>
                        
                        <div id="commentsContainer">
                            <!-- Sample comments will be loaded here -->
                            <?php
                            // Sample comments array - in a real app, you would fetch these from a database
                            $comments = [
                                [
                                    'name' => 'Ramesh Patel',
                                    'relationship' => 'Parent',
                                    'date' => 'May 15, 2023',
                                    'comment' => 'The new digital attendance system is very helpful. I receive SMS alerts in Gujarati when my child arrives at school. Thank you for implementing this feature.'
                                ],
                                [
                                    'name' => 'Geeta Sharma',
                                    'relationship' => 'Parent',
                                    'date' => 'April 28, 2023',
                                    'comment' => 'I appreciate the monthly progress reports. They help me understand my child\'s performance better. Could you also include some suggestions for improvement?'
                                ],
                                [
                                    'name' => 'Vijay Desai',
                                    'relationship' => 'Parent',
                                    'date' => 'March 10, 2023',
                                    'comment' => 'The school\'s annual function was very well organized. My child enjoyed participating in the cultural programs. Looking forward to next year\'s event!'
                                ]
                            ];
                            
                            // Display each comment
                            foreach ($comments as $comment) {
                                echo '<div class="comment-card">';
                                echo '<div class="comment-author">' . htmlspecialchars($comment['name']) . '</div>';
                                echo '<div class="comment-date">' . htmlspecialchars($comment['relationship']) . ' • Posted on ' . htmlspecialchars($comment['date']) . '</div>';
                                echo '<div class="comment-text">' . nl2br(htmlspecialchars($comment['comment'])) . '</div>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
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
                        <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Our School</a></li>
                        <li class="mb-2"><a href="comments.php" class="text-white text-decoration-none">Feedback</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact Principal</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mb-3">Contact Us</h5>
                    <p class="small mb-1"><i class="fas fa-map-marker-alt me-2"></i> Sari, Opp Intas Pharma, Sanand</p>
                    <p class="small mb-1"><i class="fas fa-phone me-2"></i> +91 98765 43210</p>
                    <p class="small mb-0"><i class="fas fa-envelope me-2"></i> info@sariprimaryschool.edu.in</p>
                    <div class="mt-3">
                        <a href="#" class="text-white me-2"><i class="fab fa-whatsapp fa-lg"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook fa-lg"></i></a>
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
            // Ripple effect for buttons
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

            // Form submission handling
            const commentForm = document.getElementById('commentForm');
            if (commentForm) {
                commentForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Get form values
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const relationship = document.getElementById('relationship').value;
                    const commentText = document.getElementById('comment').value;
                    
                    // Create new comment element
                    const commentsContainer = document.getElementById('commentsContainer');
                    const newComment = document.createElement('div');
                    newComment.className = 'comment-card';
                    newComment.innerHTML = `
                        <div class="comment-author">${escapeHtml(name)}</div>
                        <div class="comment-date">${escapeHtml(relationship)} • Posted on ${new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' })}</div>
                        <div class="comment-text">${escapeHtml(commentText).replace(/\n/g, '<br>')}</div>
                    `;
                    
                    // Insert new comment at the top
                    commentsContainer.insertBefore(newComment, commentsContainer.firstChild);
                    
                    // Reset the form
                    commentForm.reset();
                    
                    // Show success message
                    alert('Thank you for your feedback! Your comment has been added.');
                });
            }
            
            // Helper function to escape HTML
            function escapeHtml(unsafe) {
                return unsafe
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }
        });
    </script>
</body>
</html>