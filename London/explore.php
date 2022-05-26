<!-- Matea Boderistanac 
Individual project part 1
-->
<?php
include('header.php');
?>
<body>
    <!-- NAV BAR start-->
    <nav>
        <ul>
            <li><a  class="active" href="http://solace.ist.rit.edu/~mb4407/project2/index.php">Home</a></li>
            <div class="dropdown">
                <button class="dropbtn">Learn</button>
                <div class="dropdown-content">
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/history.php">History</a>
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/landscape.php">Landscape</a>
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/population.php">Population</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Explore</button>
                <div class="dropdown-content">
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/attractions.php">Attractions</a>
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/museum.php">Museums</a>
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/food.php">Food</a>
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/night.php">Night life</a>
                </div>
            </div>

            <div id="navHome" class="dropdown">
                <button class="dropbtn"  id="other">Other
                </button>
                <div class="dropdown-content">
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/form.php">Forms</a>
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/grading.php">Gradeing</a>
                    <a href="http://solace.ist.rit.edu/~mb4407/project2/references.php">References</a>
                </div>
            </div>
        </ul>
    </nav>
    <!-- NAV BAR end-->

    <h1>Want to explore London?</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">You are on the right place. </h2>
    <div class="icons">
        <a href="http://solace.ist.rit.edu/~mb4407/project2/attractions.php"><img id="location" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/attraction.svg" alt="Attractions"></a>
        <a href="http://solace.ist.rit.edu/~mb4407/project2/museum.php"><img id="location" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/museum.svg" alt="Museums"></a>
        <a href="http://solace.ist.rit.edu/~mb4407/project2/food.php"><img id="location" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/food.svg" alt="Food"></a>
        <a href="http://solace.ist.rit.edu/~mb4407/project2/night.php"><img id="location" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/night.svg" alt="Night Life"></a>
    </div>

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>