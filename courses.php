<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Courses</title>
        <link rel="stylesheet" href="styles/mobile.css">
        <link rel="stylesheet" href="styles/desktop.css" media="only screen and (min-width : 720px)" />
        <meta name="description" content="Cantor college offers undergraduate and postgraduate courses in computing and design">
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
                <img src="images/people-3.jpeg" id="people-3" alt="people">
                <img src="images/people-32.jpeg" id="people-32" alt="people">
            </div>
            <div class="image-cover">
                <span></span>
            </div>
        </section>
        <br>
        <section class="body-content">
            <div class="body-content-containers">
                <div id="comp-courses-container">
                    <h1 class="container-title">Computing courses</h1>
                    <hr class="line-separator">
                    <div class="courses-section-1">
                        <div class="c1-1">
                            <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities. At undergraduate level, there are single BSc Honours Degree courses in <em>Computing, Computer Networks, Software Engineering and Cyber Security with Forensics</em> amongst others.</p>
                            <p>The College teaches <a href="undergraduate.php">undergraduate</a> and <a href="postgraduate.php">postgraduate</a> courses in a wide range of specialisms, including <em>computer science, software development, information systems, networking and software engineering.</em></p>
                        </div>
                        <div class="c1-2">
                            <hr class="line-separator">
                            <p class="section-of-p">
                            It is at the heart of a passionate computing community, including student societies devoted to games development, digital forensics and programming.
                            </p>
                            <hr class="line-separator">
                        </div>
                    </div>
                    <div class="courses-section-2">
                        <p>The courses are British Computer Society accredited and are highly relevant to modern industry. They are designed to prepare students for professional occupations in Computing and related fields. Many graduates continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
                        <img src="images/people-4.jpeg" class="courses-image" id="c2-image" alt="people">
                    </div>
                </div>
                <div class="design-courses-container">
                    <h1 class="container-title">Design Courses</h1>
                    <hr class="line-separator">
                    <div class="courses-section-3">
                        <div class="c3-1">
                            <p>The College's <em>art and design courses</em> don't just train you, they promote alternative ways of thinking, making and communicating; they provide you with space, tools and inspiration to develop your creative practice and a clear career path.</p>
                            <p>You'll get expert teaching from active practitioners and researchers who will encourage you to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives. The College is an internationally connected creative community of diverse disciplines housed under one roof. </p>
                        </div>
                        <div class="c3-2">
                            <hr class="line-separator">
                            <p class="section-of-p">We shape our students' futures, preparing them to shape the world through applied knowledge and creativity.</p>
                            <hr class="line-separator">
                        </div>
                    </div>
                    <p>You'll develop your creative practice whilst interacting with your peers in well-equipped studios, making and digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated through our links with commercial clients, cultural institutions, businesses and organisations.</p>
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