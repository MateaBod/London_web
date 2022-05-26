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
    <!-- logo -->
    <img id="logo" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/globe.svg" alt="Landscape">

    <h1>London</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">UNITED KINGDOM,EUROPE</h2>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">COORD.51°30'26"N 0°7'39"W</h2>

    <!-- CONTENT start-->
    <p class="home">The United Kingdom's largest urban area and capital city is London.</br> It is situated in the southeast
        of the
        United Kingdom and has a roughly circular shape.
    </p>
    <div class="content">

        <p>The London region is 1,579 square kilometers in size (610 sq mi).
            The London Metropolitan Region, often known as the London Metropolitan Agglomeration, has an area of 8,382
            square kilometers (3,236 sq mi). </p>
        <p> On the Thames, London is a port. The river has had a significant impact on the city's growth. In the London
            area, a number of canals or canalized rivers were built, especially in the late 18th and early 19th
            centuries. Originally, these were used for goods trade, which has virtually ended.</p>
        <p>The Thames divides northern and southern London with its undulating line. The most important destinations are
            located north of the river for historical reasons. The south is largely a patchwork of residential
            neighborhoods connected by kilometers of traditional through lanes. There are no fast through roads in the
            area.</p>
        <p>Furthermore, London varies from east to west. The Thames' waters and the prevailing winds both flow eastward.
            As a result, the East End developed downstream, with shipping, heavy haulage, industry, and laboring areas,
            while the rich and leisured classes constructed mansions and enjoyed their pleasures in the West End.</p>
    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>