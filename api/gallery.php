<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Val's Beauty</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            background: #fff0f6;
            color: #6a0dad;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            background: rgba(106, 13, 173, 0.95);
            z-index: 1000;
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            width: 90%;
        }

        .logo img {
            height: 50px;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 40px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            transition: 0.3s;
        }

        .navbar ul li a:hover {
            color: #ff69b4;
        }

        .menu-btn {
            display: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
        }

        /* Gallery Section */
        .gallery-section {
            max-width: 900px;
            margin: 120px auto 50px;
            padding: 20px;
            text-align: center;
        }

        .gallery-section h1 {
            font-size: clamp(32px, 8vw, 48px);
            margin-bottom: 30px;
            color: #ff69b4;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .gallery-grid img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: 0.3s ease;
        }

        .gallery-grid img:hover {
            transform: scale(1.05);
        }

        /* WhatsApp Button */
        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 30px;
            background: #ff69b4;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 18px;
            transition: 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 105, 180, 0.3);
        }

        .btn:hover {
            background: white;
            color: #6a0dad;
        }

        /* RESPONSIVENESS */
        @media (max-width: 768px) {
            .navbar ul {
                position: fixed;
                right: -100%;
                top: 70px;
                flex-direction: column;
                background: rgba(106, 13, 173, 0.98);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                gap: 0;
            }

            .navbar ul.active {
                right: 0;
            }

            .navbar ul li {
                padding: 15px 0;
            }

            .menu-btn {
                display: block;
            }

            .gallery-grid {
                grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            }

            .gallery-section {
                margin-top: 100px;
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
        });
    </script>
</head>

<body>

    <!-- Navbar with Logo -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="images/logo.png" alt="Val's Beauty Logo">
            </a>
            <div class="menu-btn fas fa-bars"></div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </div>
    </nav>

    <!-- Gallery Section -->
    <div class="gallery-section">
        <h1>Our Work</h1>
        <div class="gallery-grid">
            <img src="images/bold1.jpg" alt="Bold Makeup Look 1">
            <img src="images/bold2.jpg" alt="Bold Makeup Look 2">
        </div>

        <a href="https://wa.me/254 743 158 988?text=Hello%20Val,%20I%20would%20like%20to%20book%20a%20service."
            class="btn" target="_blank">
            Book via WhatsApp
        </a>
    </div>

</body>

</html>