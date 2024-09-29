<?php
    include("includes/database.php");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Undergraduate</title>
        <link rel="stylesheet" href="styles/mobile.css">
        <link rel="stylesheet" href="styles/desktop.css" media="only screen and (min-width : 720px)" />
        <meta name="description" content="Cantor college's undergraduate courses">
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
            <section class="body-content">
                <div class="body-content-containers">
                    <div class="undergraduate-courses-container">
                        <h1 class="container-title">Undergraduate courses</h1>
                        <hr class="line-separator">
                        <div>
                            <?php
                                $sql = "SELECT * FROM course_list WHERE CourseType = 'Undergraduate'";
                                $result = mysqli_query($mysqli, $sql);
                                $queryResults = mysqli_num_rows($result);
            
                                if($queryResults > 0){
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo"
                                        <div class='course-details-container'>
                                            <h2>".$row['CourseTitle']."</h2>
                                            <hr class='line-separator'>
                                            <p>".$row['CourseSummary']."</p>
                                            <div class='results'>
                                                <div class='detail-labels'>
                                                    <ul class='detail-labels-list'>
                                                        <li>UCAS code: </li>
                                                        <li>UCAS points: </li>
                                                        <li>Year of entry: </li>
                                                        <li>Mode of attendance: </li>
                                                        <li>Study length: </li>
                                                        <li>Foundation year available: </li>
                                                        <li>Course subject: </li>
                                                        <li>No longer recruiting: </li>
                                                    </ul>
                                                </div>
                                                <div class='course-details'>
                                                    <ul class='course-details-list'>
                                                        <li>".$row['UcasCode']."</li>
                                                        <li>".$row['UcasPoints']."</li>
                                                        <li>".$row['YearOfEntry']."</li>
                                                        <li>".$row['ModeOfAttendance']."</li>
                                                        <li>".$row['StudyLength']."</li>
                                                        <li><span class='check'>".$row['HasFoundationYear']."</span></li>
                                                        <li>".$row['CourseSubject']."</li>
                                                        <li><span class='check'>".$row['NoLongerRecruiting']."</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
            include("includes/footer.php");
        ?>
        <script defer src="js/check.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>