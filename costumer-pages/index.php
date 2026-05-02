<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silvanas Express - Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../asset/css/index.css">

</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo-link">
                    <img src="../asset/images/victoria-logo.png" alt="Silvanas Express" class="logo-img">
                </a>
            
            <ul class="nav-tabs">
                <li><a href="index.php">Home</a></li>               
                <li><a href="menu.php">Menu</a></li>
                <li><a href="place.php">Place</a></li>
                <li><a href="about.php">Our Story</a></li>
                               
            </ul>
            <a href="../dashboard/login-form.php" class="login-btn">Login</a>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <!-- PICTURES SECTION -->
    <section class="home-image"> 
        <button class="prev-btn">❮</button>
        <button class="next-btn">❯</button>      
    </section>

    <!-- BEST SELLER SECTION -->
    <section class="bestseller">
        <div class="title-row"> 
            <h2 class="section-title">Our Best Sellers</h2>
            <div class="title-line"></div>
        </div>

        <div class="bestseller-container">
            <div class="food-card">
                <img src="../asset/images/home/food-1.jpg" alt="Food 1">
            </div>

            <div class="food-card">
                <img src="../asset/images/home/food-2.jpg" alt="Food 2">
            </div>

            <div class="food-card">
                <img src="../asset/images/home/food-3.jpg" alt="Food 3">
            </div>

            <div class="food-card">
                <img src="../asset/images/home/food-4.jpg" alt="Food 4">
            </div>
        </div>

        <a href="menu.php" class="view-menu-btn">Explore Digital Menu</a>
    </section>

    <section class="spaces">
        <div class="title-row">  
            <h2 class="section-title">Our Event Spaces</h2>
            <div class="title-line"></div>
        </div>

        <div class="spaces-container">
            <div class="venue-card">
                <img src="../asset/images/home/hall-1.jpg" alt="hall 1">
            </div>

            <div class="venue-card">
                <img src="../asset/images/home/hall-2.jpg" alt="hall 2">
            </div>

            <div class="venue-card">
                <img src="../asset/images/home/hall-3.jpg" alt="hall 3">
            </div>

            <div class="venue-card">
                <img src="../asset/images/home/hall-4.jpg" alt="hall 4">
            </div>
        </div>

        <a href="place.php" class="view-venue-btn">Explore Venues</a>
    </section>
  

    <footer class="footer">
    <div class="footer-container">

        <!-- LOGO -->
        <img src="../asset/images/victoria-logo.png" alt="Logo" class="footer-logo">

        <!-- ROW 1 -->
        <div class="footer-row">
            <div class="footer-links">
                <a href="index.php">Home</a>              
                <a href="menu.php">Menu</a>
                <a href="place.php">Place</a>
                <a href="about.php">Our Story</a>              
            </div>

            <div class="socials">
                <a href="https://www.facebook.com/Victoriashouseofsilvanasandpastryboutique"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/victoriashouseofsilvanasph?igsh=MWEydWt5NHhmZGpnYw=="><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- ROW 2 -->
        <div class="footer-row">
            <div class="contact-info">
                📍 Sitio Uno Annex Bldg. Pueblo de Panay Township Roxas City, Capiz | 📞 09199112602 | 📱 @silvanasexpress
            </div>

            <p class="copyright">
                &copy; 2026 Silvanas Express. All rights reserved.
            </p>
        </div>

    </div>
</footer>

    <script src="../asset/js/home.js"></script>
</body>
</html>