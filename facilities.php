<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Facilities</title>
        <link rel="stylesheet" href="styles/mobile.css">
        <link rel="stylesheet" href="styles/desktop.css" media="only screen and (min-width : 720px)" />
        <meta name="description" content="Cantor college's facilities include computing laboratories and lecture and tutorial rooms">
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
                <h1 id="page-title-mod" class="page-title">COURSES</h1>
                <img src="images/Cantor-atrium-3.jpg" id="atrium" alt="atrium">
                <img src="images/Cantor-atrium-32.jpg" id="atrium2" alt="atrium">
            </div>
            <div class="image-cover">
                <span></span>
            </div>
        </section>
        <section class="body-content" id="facilities-body-content">
            <div class="body-content-containers">
                <div class="intro-container">
                    <h1 class="container-title">Facilities</h1>
                    <hr class="line-separator">
                    <p>
                        The College is located in the attractive and pleasantly refurbished building. The building houses computing laboratories, and lecture/tutorial rooms.
                    </p>
                    <p>
                        It has its own catering facilities and student work areas. There is also a car park to the back of the building.
                    </p>
                    <img src="images/Cantor-Lecture-Theatre-3.jpg" class="facilities-image" id="lecture-theatre" alt="lecture theatre">
                    <p>
                        Our building has space of 9500m², houses over 240 staff and provides teaching space for more than 1600 students.
                    </p>
                </div>
                <hr class="line-separator">
                <div class="facilities-list-container">
                    <h2 class="container-title">Our facilities include:</h2>
                    <div class="facilities-list">
                        <div class="f1">
                            <ul>
                                <li>wi-fi technology</li>
                                <li>pool teaching rooms, including classrooms to teach from 25 - 80 students</li>
                                <li>specialist faculty facilities</li>
                                <li>specialist IT facilities</li>
                            </ul>
                        </div>
                        <div class="f2">
                            <div class="PSL-image">
                                <p id="PSL-image-title">Playstation Lab</p>
                                <img src="images/Computing-Playstation-Lab-2.jpg" class="facilities-image" id="PSL-image" alt="PS lab">
                                <hr class="line-separator" id="PSL-line-separator">
                            </div>
                            <ul id="facilities-list-pt2">
                                <li>a double height lecture theatre at first and second floor level</li>
                                <li>dramatic three-storey glass open atrium</li>
                                <li>meeting rooms</li>
                                <li>office accommodation</li>
                                <li>reception desk area</li>
                                <li>catering outlet</li>
                                <li>parking for disabled badge holders</li>
                                <li>cycle racks</li>
                                <li>gallery</li>
                            </ul>
                        </div>
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