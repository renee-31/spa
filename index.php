<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simon's Nail Spa - Timau Town</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #f8e9e9;
            --accent: #d4af37;
            --dark: #333333;
            --light: #ffffff;
            --text: #555555;
        }

        body {
            color: var(--text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background-color: var(--light);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--dark);
            text-decoration: none;
        }

        .logo span {
            color: var(--accent);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--accent);
        }

        .mobile-menu {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1604654894610-df63bc536371?ixlib=rb-4.0.3') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
            color: var(--light);
            padding-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            background-color: var(--accent);
            color: var(--light);
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #c19d2d;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* Services Section */
        .services {
            padding: 100px 0;
            background-color: var(--primary);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2:after {
            content: '';
            position: absolute;
            width: 70px;
            height: 3px;
            background-color: var(--accent);
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background-color: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            background-color: var(--primary);
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: var(--accent);
        }

        .service-content {
            padding: 30px;
        }

        .service-content h3 {
            font-size: 22px;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .bridal-card {
            border: 2px solid var(--accent);
            position: relative;
        }

        .bridal-badge {
            position: absolute;
            top: -10px;
            right: 20px;
            background-color: var(--accent);
            color: var(--light);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        /* About Section */
        .about {
            padding: 100px 0;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-text h2 {
            font-size: 36px;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
        }

        .features {
            margin-top: 30px;
        }

        .feature {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .feature i {
            color: var(--accent);
            margin-right: 10px;
            font-size: 18px;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
            background-color: var(--primary);
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .contact-info h3 {
            font-size: 24px;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .contact-details {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .contact-item i {
            color: var(--accent);
            margin-right: 15px;
            font-size: 20px;
            width: 30px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--dark);
            color: var(--light);
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-3px);
        }

        .contact-form {
            background-color: var(--light);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border 0.3s;
        }

        .form-control:focus {
            border-color: var(--accent);
            outline: none;
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: var(--light);
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            width: 40px;
            height: 2px;
            background-color: var(--accent);
            bottom: 0;
            left: 0;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--accent);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 14px;
            color: #bbb;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .about-content, .contact-container {
                grid-template-columns: 1fr;
            }
            
            .about-image {
                order: -1;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .section-title h2 {
                font-size: 30px;
            }
            
            nav ul {
                display: none;
            }
            
            .mobile-menu {
                display: block;
            }
            
            .mobile-nav {
                position: fixed;
                top: 70px;
                left: 0;
                width: 100%;
                background-color: var(--light);
                box-shadow: 0 5px 10px rgba(0,0,0,0.1);
                padding: 20px;
                display: none;
            }
            
            .mobile-nav.active {
                display: block;
            }
            
            .mobile-nav ul {
                list-style: none;
            }
            
            .mobile-nav ul li {
                margin-bottom: 15px;
            }
            
            .mobile-nav ul li a {
                text-decoration: none;
                color: var(--dark);
                font-weight: 500;
                display: block;
                padding: 10px 0;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">Simon's <span>Nail Spa</span></a>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="mobile-nav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>


    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container hero-content">
            <h1>SIMONS NAIL SPA TIMAU</h1>
            <p>From concept to completion, we transform your nail art vision into wearable beauty. It's the centre of all beauty's. Where beauty is made with perfection.</p>
            <a href="#contact" class="btn">book with us today</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
                <p>Professional nail care tailored to your needs</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hand-sparkles"></i>
                    </div>
                    <div class="service-content">
                        <h3>Luxury Manicures</h3>
                        <p>Indulge in our premium manicure services that leave your hands looking and feeling rejuvenated.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-spa"></i>
                    </div>
                    <div class="service-content">
                        <h3>Spa Pedicures</h3>
                        <p>Relax and unwind with our therapeutic pedicure treatments for soft, beautiful feet.</p>
                    </div>
                </div>
                <div class="service-card Ceremonial-card">
                    <div class="ceremonial-badge">Special</div>
                    <div class="service-icon">
                        <i class="fas fa-ring"></i>
                    </div>
                    <div class="service-content">
                        <h3>Ceremonial Nail Art</h3>
                        <p>Make your special day perfect with our exclusive ceremonial nail art designs and packages.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <div class="service-content">
                        <h3>Nail Art & Design</h3>
                        <p>Express your style with our creative nail art designs, from subtle to spectacular.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <div class="service-content">
                        <h3>Gel & Acrylic Nails</h3>
                        <p>Long-lasting beauty with our professional gel and acrylic nail applications.</p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="service-content">
                        <h3>Nail Treatments</h3>
                        <p>Specialized treatments for nail health and repair to keep your nails strong and beautiful.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Welcome to Simon's Nail Spa</h2>
                    <p>Located in the heart of Timau Town, Simon's Nail Spa has been providing exceptional nail care services for over 5 years. Our skilled technicians are dedicated to making every visit a relaxing and beautiful experience.</p>
                    <p>We specialize in ceremonial nail art, graduations, ruracio, weddings babyshowers etc helping our clients look and feel their best on their special day with custom designs that complement their wedding funtional theme.</p>
                    <div class="features">
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Experienced & Certified Technicians</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Premium Quality Products</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Hygienic & Sanitized Environment</span>
                        </div>
                        <div class="feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Customized Services</span>
                        </div>
                    </div>
                    <a href="#contact" class="btn" style="margin-top: 20px;">Visit Us Today</a>
                </div>
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1590846406792-0adc7f938f1d?ixlib=rb-4.0.3" alt="Simon's Nail Spa Interior">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
                <p>Get in touch to book your appointment</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Visit Our Spa</h3>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Timau Town</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <span>0115777875</span>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-clock"></i>
                            <span>Mon - Sat: 8:00 AM - 7:00 PM<br>WE DO NOT OPEN ON SUNDAYS</span>
                        </div>
                    </div>
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                       
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Simon's Nail Spa</h3>
                    <p>Your premier destination for luxury nail care in Timau Town and its surrounding. We specialize in ceremonial nail art and premium nail services.</p>
                </div>
                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Services</h3>
                    <ul class="footer-links">
                        <li><a href="#services">Manicures</a></li>
                        <li><a href="#services">Pedicures</a></li>
                        <li><a href="#services">Ceremonial Nail Art</a></li>
                        <li><a href="#services">Nail Art & Design</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contact Info</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> Timau Town</li>
                        <li><i class="fas fa-phone"></i>0757174989 </li>
                        <li><i class="fas fa-phone"></i> TALK WITH SIMON KAGWI </li>
                        <li><i class="fas fa-clock"></i> Mon-Sat: 9AM-7PM</li>
                    </ul>
                </div>
            </div>
            <!-- Enhanced Contact Section with Google Maps -->
<section class="contact" id="contact">
    <div class="container">
        <div class="section-title">
            <h2>Locate via</h2>
            <p>Get in touch to book your appointment</p>
        </div>
                
                <!-- Interactive Google Map -->
                <div class="map-container" style="margin-top: 30px;">
                    <h3 style="margin-bottom: 15px;">Our Location</h3>
                    <div class="map-wrapper" style="height: 200px; border-radius: 10px; overflow: hidden; margin-bottom: 15px;">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.227277382932!2d36.94999657602573!3d-0.09291329999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18285e63d0d2a0ab%3A0x8e2d204d06f8b5c1!2sTimau!5e0!3m2!1sen!2ske!4v1698765432107!5m2!1sen!2ske" 
                            width="100%" 
                            height="200" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <a href="https://maps.google.com/?q=Timau+Town" target="_blank" class="btn" style="display: block; text-align: center; background-color: var(--dark);">
                        <i class="fas fa-directions"></i> Get Directions on Google Maps
                    </a>
                </div>

                <h3 style="margin-top: 30px;">Follow Us</h3>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="contact-form">
                <h3>Send us a Message</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="service">Service Interested In</label>
                        <select id="service" class="form-control">
                            <option value="manicure">Manicure</option>
                            <option value="pedicure">Pedicure</option>
                            <option value="bridal">Ceremonial Nail Art</option>
                            <option value="gel">Gel Nails</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" placeholder="Tell us about your needs..."></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
        
        <!-- Additional Location Info -->
        <div class="location-details" style="margin-top: 50px; text-align: center; padding: 30px; background: var(--light); border-radius: 10px;">
            <h3 style="margin-bottom: 20px; color: var(--dark);">Finding Us is Easy!</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                <div class="location-tip">
                    <i class="fas fa-map-signs" style="color: var(--accent); font-size: 24px; margin-bottom: 10px;"></i>
                    <h4 style="color: var(--dark); margin-bottom: 10px;">Location</h4>
                    <p>were located at Timau Main stage Near Timau Stadium.</p>
                </div>
                <div class="location-tip">
                    <i class="fas fa-parking" style="color: var(--accent); font-size: 24px; margin-bottom: 10px;"></i>
                    <h4 style="color: var(--dark); margin-bottom: 10px;">Parking</h4>
                    <p>Convenient parking available right in front of our spa and nearby parking lot.</p>
                </div>
                <div class="location-tip">
                    <i class="fas fa-bus" style="color: var(--accent); font-size: 24px; margin-bottom: 10px;"></i>
                    <h4 style="color: var(--dark); margin-bottom: 10px;">Transport</h4>
                    <p>Easily accessible by public transport - we're just located at the foot of timau stage near Timau Town Stadium.</p>
                </div>
            </div>
        </div>
    </div>
</section>
            <div class="copyright">
                <p>&copy; 2023 Simon's Nail Spa. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.mobile-nav').classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.mobile-nav a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.mobile-nav').classList.remove('active');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your message our loved client.We will get back to you with a feedback aligning with your message ASAP. thankyou for trusting us');
            this.reset();
        });
    </script>
</body>
</html>