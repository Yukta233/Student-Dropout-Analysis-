<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Dropout Analysis System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background-color: #11212D; /* Dark background */
        }
        .team-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: linear-gradient(135deg, #233745, #4A5C6A); /* Gradient for team cards */
            border: 1px solid #4A5C6A; /* Border color */
        }
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .section-title {
            color: #CCD0CF; /* Title color */
        }
        .contact-card {
            background: linear-gradient(135deg, #233745, #4A5C6A); /* Gradient for contact card */
            border: 1px solid #4A5C6A; /* Border color */
        }
        .text-body {
            color: #9BAAAB; /* Body text color */
        }
        .vertical-section {
            margin-bottom: 2rem; /* Space between sections */
        }
    </style>
</head>
<body class="font-sans">
    <!-- Navigation -->
    <nav class="bg-primary text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-graduation-cap text-2xl text-accent mr-2"></i>
                    <span class="font-semibold text-xl">Dropout Analysis</span>
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-light hover:text-white">Home</a>
                    <a href="analysis.php" class="text-light hover:text-white">Analysis</a>
                    <a href="intervensions.php" class="text-light hover:text-white">Interventions</a>
                    <a href="aboutus.php" class="text-light hover:text-white">About Us</a>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <a href="logout.php" class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="bg-accent hover:bg-tertiary text-white px-4 py-2 rounded">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

   <!-- About Us Section -->
<section class="container mx-auto px-6 py-12">
    <div class="text-center mb-12 animate-fade-in-up">
        <h1 class="text-4xl font-bold mb-4 transform transition-all duration-500 hover:scale-105">
            <span class="bg-gradient-to-r from-light to-lighter text-transparent bg-clip-text">
                About Our Initiative
            </span>
        </h1>
        <p class="text-lg text-body animate-fade-in delay-100">
            Pioneering Educational Insights Through Data-Driven Solutions
        </p>
    </div>

    <!-- Enhanced Mission Section -->
    <div class="vertical-section bg-gradient-to-br from-secondary/80 to-primary/90 rounded-lg shadow-2xl p-8 
                transform transition-all duration-500 hover:scale-[1.01] hover:shadow-3xl
                animate-slide-in-left">
        <div class="flex items-center space-x-4 mb-4">
            <div class="h-1 w-12 bg-accent animate-pulse"></div>
            <h2 class="text-2xl font-bold text-lighter">Our Commitment to Education</h2>
        </div>
        
        <div class="grid md:grid-cols-2 gap-8">
            <div class="space-y-4">
                <p class="text-body leading-relaxed text-lg pl-4 border-l-4 border-accent">
                    Founded in 2025, our platform has analyzed dropout patterns across 15,000+ schools, 
                    identifying key socioeconomic factors influencing student retention. We combine 
                    advanced analytics with educational expertise to:
                </p>
                
                <ul class="space-y-3 text-body">
                    <li class="flex items-center">
                        <i class="fas fa-chart-line text-accent mr-3"></i>
                        Track real-time dropout trends across regions
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-lightbulb text-accent mr-3"></i>
                        Develop predictive models for early intervention
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-hands-helping text-accent mr-3"></i>
                        Partner with 200+ educational institutions
                    </li>
                </ul>
            </div>

            <div class="space-y-4">
                <div class="p-4 bg-primary/30 rounded-lg">
                    <h3 class="text-lighter text-lg font-semibold mb-2">Key Achievements</h3>
                    <div class="flex justify-between text-body">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent">35%</div>
                            <div class="text-sm">Reduction Prediction</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent">1.2M+</div>
                            <div class="text-sm">Students Impacted</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-accent">89%</div>
                            <div class="text-sm">Accuracy Rate</div>
                        </div>
                    </div>
                </div>

                <p class="text-body leading-relaxed">
                    Our machine learning models process over 50 demographic indicators, 
                    including family income, academic performance, and community infrastructure, 
                    to provide actionable insights for policymakers and educators.
                </p>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <div class="w-24 h-1 bg-accent animate-pulse"></div>
        </div>
    </div>
</section>

       <!-- Team Section -->
<div class="space-y-12">
    <!-- Team Member 1 - Left Aligned -->
    <div class="flex flex-col md:flex-row items-center gap-8">
        <div class="w-full bg-tertiary rounded-lg shadow-md p-8">
            <div class="team-card rounded-lg shadow-md p-8 text-center">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/3">
                        <img src="img/team1.jpg" alt="John Doe" class="w-48 h-48 rounded-full mx-auto mb-4">
                    </div>
                    <div class="md:w-2/3 text-left">
                        <h3 class="text-2xl font-bold text-white mb-2">Priya Pandey</h3>
                        <p class="text-body text-lg mb-4">Project Manager</p>
                        <p class="text-body mb-4">
                            With over 10 years of experience in educational management, John leads our strategic initiatives 
                            and ensures alignment with national educational policies. Specializes in program implementation 
                            and stakeholder engagement.
                        </p>
                        <div class="flex justify-start space-x-4">
                            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-linkedin fa-lg"></i></a>
                            <a href="#" class="text-pink-400 hover:text-pink-600"><i class="fab fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Team Member 2 - Right Aligned -->
<div class="flex flex-col md:flex-row items-center gap-8">
    <div class="w-full bg-tertiary rounded-lg shadow-md p-8">
        <div class="team-card rounded-lg shadow-md p-8 text-center">
            <div class="flex flex-col md:flex-row-reverse items-center gap-8"> <!-- Changed to flex-row-reverse -->
                <div class="md:w-1/3">
                    <img src="img/aastha.jpeg" alt="Aastha Ghosh" class="w-48 h-48 rounded-full mx-auto mb-4">
                </div>
                <div class="md:w-2/3 text-left">
                    <h3 class="text-2xl font-bold text-white mb-2">Aastha Ghosh</h3>
                    <p class="text-body text-lg mb-4">Lead Data Analyst</p>
                    <p class="text-body mb-4">
                        Data science expert with 7 years of experience in educational analytics. Manages our data pipeline 
                        and ensures the accuracy of predictive models. Proficient in Python, R, and advanced visualization tools.
                    </p>
                    <div class="flex justify-start space-x-4">
                        <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-linkedin fa-lg"></i></a>
                        <a href="#" class="text-pink-400 hover:text-pink-600"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Team Member 3 - Left Aligned -->
    <div class="flex flex-col md:flex-row items-center gap-8">
        <div class="w-full bg-tertiary rounded-lg shadow-md p-8">
            <div class="team-card rounded-lg shadow-md p-8 text-center">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <div class="md:w-1/3">
                        <img src="img/team3.jpg" alt="Alice Johnson" class="w-48 h-48 rounded-full mx-auto mb-4">
                    </div>
                    <div class="md:w-2/3 text-left">
                        <h3 class="text-2xl font-bold text-white mb-2">Yukta Shree</h3>
                        <p class="text-body text-lg mb-4">Senior Developer</p>
                        <p class="text-body mb-4">
                            Full-stack developer specializing in educational technology platforms. Leads our platform development 
                            team with expertise in PHP, JavaScript, and database architecture. Focused on creating intuitive user experiences.
                        </p>
                        <div class="flex justify-start space-x-4">
                            <a href="#" class="text-blue-400 hover:text-blue-600"><i class="fab fa-linkedin fa-lg"></i></a>
                            <a href="#" class="text-pink-400 hover:text-pink-600"><i class="fab fa-instagram fa-lg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Contact Section -->
        <div class="vertical-section contact-card rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold section-title mb-4">Contact Us</h2>
            <p class="text-body leading-relaxed mb-4">
                Have questions or want to learn more about our project? Feel free to reach out to us!
            </p>
            <p class="text-body"><strong>Email:</strong> support@dropoutanalysis.com</p>
            <p class="text-body"><strong>Phone:</strong> +1 234 567 890</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white py-6">
        <div class="container mx-auto text-center">
            <p class="text-sm">&copy; <?php echo date('Y'); ?> Dropout Analysis System. All rights reserved.</p>
        </div>
    </footer>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#08141B',
                        'secondary': '#11212D',
                        'tertiary': '#233745',
                        'accent': '#4A5C6A',
                        'light': '#9BAAAB',
                        'lighter': '#CCD0CF',
                    }
                }
            }
        }
    </script>
</body>
</html>