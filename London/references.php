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
    <!-- CONTENT start-->
    <h2>References</h2>
    <div class="other">

        <ul">
            <li id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">CONTENT</li>
            <li>https://www.britannica.com/place/London</li>
            <li>https://simple.wikipedia.org/wiki/London</li>
            <li>https://www.londoncitybreak.com/</li>
            <li>https://en.wikipedia.org/wiki/</li>
            <li>https://www.destinationtips.com/destinations/3-days-london/15/</li>
            <li>https://worldpopulationreview.com/world-cities/london-population</li>
            <li id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">IMAGE</li>
            <li>http://www.kerryhyndman.co.uk/london-skyline</li>
            <li id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">NAV BAR</li>
            <li>https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_responsive_navbar_dropdown</li>
            <li>https://www.timeout.com/london/restaurants/londons-best-street-food-markets-and-food-halls</li>
            <li>https://en.wikipedia.org/wiki/Geography_of_London</li>

            </ul>
    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>