<!-- Matea Boderistanac 
Individual project part 1
-->
<!DOCTYPE html>
<html lang="en">

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
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">Grading page</h2>

    <div class="other">

        <p>Usage of sematic html Tags</br>
            Usage of hover features</br>
            Usage of CSS3 animations</br> </br>
            Content- is divided into three big groups:</br>
            LEARN - history, landscape, population </br>
            EXPLORE - attractions, museums, food, night life</br>
            OTHER - source, grading, forms (on the to do list)</br></br>
            NAVIGATION - trough nav bar which is present in every page</br>
            and trough the learn and explore pages that can only be reached from the home page</br>
            and the map page that is reachable from the attraction page (links- logo images)</br></br>
            Color palette is mainly composed from three colors (#09162a, #024d6a, #f2e4ab)</br></br>
            All of the graphics were made by me except the image on the home page
            </br>
          
            Responsive design; media queries</br>
            JavaScript-Form validation with JavaScript,</br>
            on action hover the subheaders(h2) turn red</br>
            Favicon</br>
            Contact form; Comments saved to and pulled from database (insert and select)</br>
            PHP includes on every page (header and footer)</br>
            DHTML </br>
            ...</p>

    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>