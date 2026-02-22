<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Val's Beauty</title>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #ffffff;
            color: #333;
            overflow-x: hidden;
        }

        /* NAVBAR */
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            background: rgba(255, 255, 255, 0.98);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: 0.3s;
        }

        .nav-container {
            width: 90%;
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            height: 55px;
            display: block;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 40px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: 0.3s;
        }

        .navbar ul li a:hover {
            color: #d4af37;
        }

        .menu-btn {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: #333;
        }

        /* HERO SECTION */
        .hero {
            height: 100vh;
            background: url("images/bold3.jpg") center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            top: 0;
            left: 0;
        }

        .hero-content {
            position: relative;
            color: white;
            z-index: 2;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-size: clamp(36px, 10vw, 64px);
            letter-spacing: 2px;
            background: linear-gradient(90deg, #d4af37, #fff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s infinite linear;
        }

        @keyframes shimmer {
            0% {
                background-position: -500px 0;
            }

            100% {
                background-position: 500px 0;
            }
        }

        .hero-content p {
            margin: 20px 0;
            font-size: clamp(16px, 4vw, 22px);
        }

        .btn {
            padding: 14px 30px;
            background: #d4af37;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(212, 175, 55, 0.5);
        }

        .btn:hover {
            background: #c19b2e;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.8);
        }

        /* SECTIONS */
        section {
            padding: 80px 20px;
            text-align: center;
        }

        h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #d4af37;
        }

        /* ABOUT */
        #about {
            background: #fff5f8;
        }

        /* SERVICES */
        #services {
            background: white;
        }

        .service-item {
            margin: 20px 0;
            font-size: 18px;
        }

        /* GALLERY */
        #gallery {
            background: #fff5f8;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .gallery-grid img {
            width: 100%;
            border-radius: 12px;
            transition: 0.3s;
        }

        .gallery-grid img:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* TESTIMONIALS */
        #testimonials {
            background: #fff5f8;
            padding: 80px 20px;
            text-align: center;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .testimonial-item {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            font-style: italic;
            position: relative;
        }

        .testimonial-item span {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #d4af37;
        }

        /* INSTAGRAM */
        #instagram h2 {
            margin-bottom: 20px;
            color: #d4af37;
        }

        /* FAQ */
        #faq {
            background: white;
            padding: 80px 20px;
            text-align: center;
        }

        .faq-item {
            max-width: 800px;
            margin: 20px auto;
            background: #fff5f8;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        /* CONTACT */
        #contact {
            background: white;
            padding: 80px 20px;
            text-align: center;
        }

        .contact-info {
            margin-top: 20px;
            font-size: 18px;
        }

        .contact-info p {
            margin: 15px 0;
        }

        .contact-info i {
            color: #d4af37;
            margin-right: 10px;
        }

        .contact-info a {
            text-decoration: none;
            color: #333;
        }

        .contact-info a:hover {
            color: #d4af37;
        }

        /* FOOTER */
        footer {
            background: #111;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 14px;
        }

        /* WHATSAPP BUTTON */
        .whatsapp-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #d4af37;
            color: white;
            padding: 15px 20px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 1001;
            transition: 0.3s;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(212, 175, 55, 0.7);
            }

            70% {
                transform: scale(1.05);
                box-shadow: 0 0 0 10px rgba(212, 175, 55, 0);
            }

            100% {
                transform: scale(1);
                box-shadow: 0 0 0 0 rgba(212, 175, 55, 0);
            }
        }

        .whatsapp-btn:hover {
            background: #c19b2e;
        }

        /* RESPONSIVENESS */
        @media (max-width: 992px) {
            .navbar ul {
                position: fixed;
                right: -100%;
                top: 75px;
                flex-direction: column;
                background: #fff;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 10px rgba(0, 0, 0, 0.05);
                gap: 0;
            }

            .navbar ul.active {
                right: 0;
            }

            .navbar ul li {
                padding: 20px 0;
            }

            .menu-btn {
                display: block;
            }
        }

        @media (max-width: 600px) {
            section {
                padding: 60px 20px;
            }

            h2 {
                font-size: 28px;
            }

            .gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            }
        }

        /* HERO SHIMMER */
        @keyframes shimmer {
            0% {
                background-position: -500px 0;
            }

            100% {
                background-position: 500px 0;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.querySelector('.menu-btn');
            const navUl = document.querySelector('.navbar ul');

            if (menuBtn) {
                menuBtn.addEventListener('click', () => {
                    navUl.classList.toggle('active');
                    menuBtn.classList.toggle('fa-xmark');
                });
            }

            // Close menu when clicking a link
            document.querySelectorAll('.navbar ul li a').forEach(link => {
                link.addEventListener('click', () => {
                    navUl.classList.remove('active');
                    menuBtn.classList.remove('fa-xmark');
                });
            });
        });
    </script>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img src="images/logo.png" alt="Val's Beauty Logo">
            </div>
            <div class="menu-btn fas fa-bars"></div>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#instagram">Instagram</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- HERO -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Val’s Beauty</h1>
            <p>Luxury Glam • Bridal • Soft Glam</p>
            <a href="https://wa.me/254 743 158 988" target="_blank" class="btn">
                Book Appointment
            </a>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about">
        <h2>About Val</h2>
        <p>
            Val’s Beauty specializes in luxury glam looks designed to enhance
            your natural beauty. From bridal elegance to bold statement glam,
            every look is crafted with precision and passion.
        </p>
    </section>

    <!-- SERVICES -->
    <section id="services">
        <h2>Services</h2>
        <div class="service-item">Bridal Makeup — KSh 2,000</div>
        <div class="service-item">Full glam Makeup — KSh 1,000</div>
        <div class="service-item">Soft Glam — KSh 700</div>
        <div class="service-item">Strip-lash installation — KSh 400</div>
    </section>

    <!-- GALLERY -->
    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-grid">
            <img src="images/bold1.jpg" alt="">
            <img src="images/bold2.jpg" alt="">
            <img src="images/bold3.jpg" alt="">
            <img src="images/bold4.jpg" alt="">
            <img src="images/bold5.jpg" alt="">
            <img src="images/bold6.jpg" alt="">
            <img src="images/bold7.jpg" alt="">



            <!-- Add more images here later -->
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials">
        <h2>What Clients Say</h2>
        <div class="testimonial-grid">
            <div class="testimonial-item">
                <p>"Val’s Beauty made my bridal day unforgettable! My makeup lasted all day perfectly."</p>
                <span>- Sarah</span>
            </div>
            <div class="testimonial-item">
                <p>"Absolutely loved my soft glam for the photoshoot. Professional and flawless!"</p>
                <span>- Michelle</span>
            </div>
            <div class="testimonial-item">
                <p>"The best glam experience in Nairobi! Val is amazing at detail."</p>
                <span>- Diana</span>
            </div>
        </div>
        <!-- WhatsApp submit testimonial button -->
        <a href="https://wa.me/254 743 158 988?text=Hi%20Valentine,%20I%20want%20to%20submit%20a%20testimonial"
            target="_blank" class="btn" style="margin-top:20px;">
            Submit Your Testimonial
        </a>
    </section>

    <!-- INSTAGRAM MANUAL GALLERY -->
    <section id="instagram">
        <h2>Follow Me on Instagram</h2>
        <div class="gallery-grid">
            <a href="https://instagram.com/lalycerentar" target="_blank"><img src="images/insta1.jpg"
                    alt="Instagram Photo 1"></a>
            <a href="https://instagram.com/lalycerentar" target="_blank"><img src="images/insta2.jpg"
                    alt="Instagram Photo 2"></a>
            <a href="https://instagram.com/lalycerentar" target="_blank"><img src="images/insta3.jpg"
                    alt="Instagram Photo 3"></a>
            <!-- Add more photos -->
        </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <p><strong>Do you travel to clients?</strong> — Yes! I serve Nairobi and surrounding areas.</p>
        </div>
        <div class="faq-item">
            <p><strong>How far in advance should I book?</strong> — Ideally 2–3 days before your event.</p>
        </div>
        <div class="faq-item">
            <p><strong>Do you offer trial makeup?</strong> — Yes, trials can be scheduled upon request.</p>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact">
        <h2>Contact</h2>
        <div class="contact-info">
            <p><i class="fa-solid fa-location-dot"></i> Nairobi, Kenya</p>
            <p><i class="fa-solid fa-phone"></i> +254 743 158 988</p>
            <p><i class="fa-brands fa-instagram"></i> <a href="https://instagram.com/lalycerentar"
                    target="_blank">@lalycerentar</a></p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>© 2026 Val’s Beauty | Luxury Glam Makeup Artist</p>
    </footer>

    <!-- WHATSAPP BUTTON -->
    <a href="https://wa.me/254 743 158 988" class="whatsapp-btn" target="_blank">
        Book Now
    </a>

</body>

</html>