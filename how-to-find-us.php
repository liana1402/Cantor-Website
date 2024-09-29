<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>How to find us</title>
        <link rel="stylesheet" href="styles/mobile.css">
        <link rel="stylesheet" href="styles/desktop.css" media="only screen and (min-width : 720px)" />
        <meta name="description" content="Cantor College, a university in sheffield">
    </head>
<body>
    <?php
        include("includes/header.php");
    ?>

    <main>
        <div class="separation-bars">
            <div class="bar" id="bar-1"></div>
            <div class="bar" id="bar-2"></div>
            <div class="bar" id="bar-3"></div>
            <div class="bar" id="bar-4"></div>
        </div>
        <section class="main-image">
            <div class="banner-image">
                <h1 id="page-title" class="page-title">HOW TO FIND US</h1>
                <img src="images/cantor-building-3.jpeg" id="building3" alt="cantor building">
                <img src="images/cantor-building-32.jpg" id="building32" alt="cantor building">
            </div>
            <div class="image-cover">
                <span></span>
            </div>
        </section>
        <section class="body-content" id="htfu-body-content">
            <div class="body-content-containers">
                <div class="map-container">
                    <h1 class="container-title">Map of SHU City Campus</h1>
                    <hr class="line-separator">
                    <div class="m">
                        <div class="m1">
                            <img src="images/SHUSpaceCitymap.jpg" class="find-us-images" id="map-image" alt="map">
                        </div>
                        <div class="m2">
                            <p id="map-title">Cantor's location:</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d630.4103381164147!2d-1.4678909157911517!3d53.37705006588899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798338bc5a1d13%3A0xad74824d1242efa8!2sCantor%20College!5e0!3m2!1sen!2suk!4v1704287306787!5m2!1sen!2suk" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
                        </div>
                    </div>
                    <hr class="line-separator">
                </div>
                <div class="location-and-contact-container">
                    <h2>Address:</h2>
                    <ul class="address-items">
                        <li>Cantor College</li>
                        <li>Main Street</li>
                        <li>Sheffield</li>
                        <li>SC4 2BB</li>
                    </ul>
                    <div class="contact-items">
                        <p>Tel:(01321) 2340 235</p>
                        <p>Fax: (01321) 2340 236</p>
                        <p>Email: info@cantorcollege.ac.uk</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
        include("includes/footer.php");
    ?>
    
    <script src="js/main.js"></script>
</body>
</html>