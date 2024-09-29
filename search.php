<?php
    include("includes/database.php");
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search results</title>
        <link rel="stylesheet" href="styles/mobile.css">
        <link rel="stylesheet" href="styles/desktop.css" media="only screen and (min-width : 720px)" />
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
                    <h1 class="container-title">Search results</h1>
                    <hr class="line-separator">
                    <div class="search-results-container">
                        <?php
                            if(isset($_POST['submit-search'])){
                                $search = mysqli_real_escape_string($mysqli, $_POST['search']); //validation for special characters
                                $sql = "SELECT * FROM course_list WHERE CourseTitle LIKE '%$search%' OR CourseSubject = '%$search%'"; //searches through database for keywords
                                $result = mysqli_query($mysqli, $sql);
                                $queryResult = mysqli_num_rows($result); //checks how many results
                                
                                if($queryResult > 0){
                                    echo $queryResult. " results found";
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
                                                        <li>".$row['HasFoundationYear']."</li>
                                                        <li>".$row['CourseSubject']."</li>
                                                        <li>".$row['NoLongerRecruiting']."</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>";
                                    }
                                } else{
                                    echo"No results found";
                                }
                            }
                        ?>
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