<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cantor</title>
    <link rel="stylesheet" href="styles/mobile.css">
    <link rel="stylesheet" href="styles/desktop.css" media="only screen and (min-width : 720px)" />
    <meta name="description" content="Cantor college's website main page">
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
            <div class="main-image-container">
                <div class="banner-image">
                    <h1 class="page-title">CANTOR COLLEGE</h1>
                    <img id="cantor-building-1" src="images/cantor-building-1.jpg" alt="cantor building">
                    <img id="cantor-building-12" src="images/cantor-building-12.jpg" alt="cantor building">
                </div>
                <div class="side-images">
                    <img id="cantor-building-2" src="images/cantor-building-2.jpeg" alt="cantor building">
                    <img id="people-1" src="images/people-1.jpeg" alt="people in class">
                </div>
            </div>
            <div class="image-cover">
                <span></span>
            </div>
        </section>
        <br>
        <section class="body-content">
            <div class="body-content-containers">
                <div class="courses-and-sidebar">
                    <div id="courses-container">
                        <h1 class="container-title"><a href="courses.php">Courses</a></h1>
                        <hr class="line-separator">
                        <ul class="course-types">
                            <li><a href="undergraduate.php" id="undergraduate">Undergraduate</a></li>
                            <div id="vertical-line"></div>
                            <li><a href="postgraduate.php" id="postgraduate">Postgraduate</a></li>
                        </ul>
                    </div>
                    <br>
                    <div class="side-bar-container">
                        <h2 id="more-info-title">More info</h2>
                        <hr>
                        <ul class="more-info-list">
                            <li><a href="info-for-staff.php">Info for staff</a></li>
                            <li><a href="info-for-students.php">Info for students</a></li>
                            <li><a href="info-for-business.php">Info for business</a></li>
                        </ul>
                    </div>
                </div>
                <br>
                <div id="news-container">
                    <h1 class="container-title">News</h1>
                    <hr class="line-separator">
                    <ul class="news">
                        <li>
                            <div class="news-content">
                                <img id="news-1-image" src="images/people-1.jpeg" alt="students in class"><p>Cantor College recently hosted the Software Engineering student of the year awards. Short-listed candidates from around the country attended the one day event.<br><span class="news-date">12 MAY 2023</span></p>
                                <div class="news-title">
                                    <h4>Student of the year awards</h4>
                                </div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <div class="news-content">
                                <img id="news-2-image" src="images/art.jpeg" alt="art gallery"><p>Student from the art and design course showcasing art projects as a walk-through gallery in Cantor. Everyone is able to view these pieces.<br><span class="news-date">9 SEP 2023</span></p>
                                <div class="news-title">
                                    <h4>Art and design gallery</h4>
                                </div>
                            </div>
                        </li>
                        <br>
                        <li>
                            <div class="news-content">
                                <img id="news-3-image" src="images/wallArt.jpeg" alt="wall art"><p>Cantor has recently been seen with many new wall art and murals around the outside of campus. Make sure to check them out next time you're around.<br><span class="news-date">20 OCT 2023</span></p>
                                <div class="news-title">
                                    <h4>Wall art around campus</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="more-info">
                <h2>More info</h2>
                <ul class="more-info-list">
                    <li><a href="info-for-staff.php">Info for staff</a></li>
                    <li><a href="info-for-students.php">Info for students</a></li>
                    <li><a href="info-for-business.php">Info for business</a></li>
                </ul>
            </div>
        </section>
    </main>

    <?php
        include("includes/footer.php");
    ?>
    
    <script src="js/main.js"></script>
</body>
</html>