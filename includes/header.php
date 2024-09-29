<header>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <a href="index.php"><img src="images/logo.png" alt="logo"></a>
            </div>
            <div class="navbar-menu">
                <div class="side-menu">
                    <button id="side-menu">Menu</button>
                    <ul class="navbar-menu-items" id="navbar-menu-items">
                        <li><a href="about-cantor.php">About Cantor</a></li>
                        <li><a href="courses.php">Studying at Cantor</a></li>
                        <li><a href="facilities.php">Facilities</a></li>
                        <li><a href="how-to-find-us.php">How to find us</a></li>
                        <li><a href="learning-resources.php">Learning resources</a></li>
                    </ul>
                </div>

                <form action="search.php" method="POST">
                    <input type="text" name="search" placeholder="Search..." class="search">
                    <button type="submit" name="submit-search" class="search-button"></button>
                </form>
            </div>
        </div>
    </nav>
</header>