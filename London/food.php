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
    <img id="logo" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/food.svg" alt="Food">

    <h1>Food</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">Experience London through taste</h2>

    <!-- CONTENT start-->
    <p class="home">There are great delicacies and plenty of outstanding options for everyone's
        taste on numerous streets, markets, and food halls in London.
        Explore excellent spots to grab a bite to eat.</p>
    <div class="content">
        <h3>Bang Bang Oriental</h3>
        <p>Bang Bang Oriental in Colindale is a massive pan-Asian food court.
            With 27 separate kiosks serving a wide range of Oriental cuisines and a capacity for up to 450 people,
            it is Europe's largest food hall of its sort.</p>

        <h3>Borough Market</h3>
        <p>This historic institution of the Borough market dates back to the thirteenth century.
            It is known as the mother of all artisan gastronomic markets in London.
            It is a wide buffet of home-grown products and gourmet delicacies from all over the world.</p>

        <h3>Berwick Street Market</h3>
        <p>Among the 20 or so street food vendors, the 300-year-old Berwick Street Market is filled with fruit sellers,
            florists, and fabric merchants.
            Snaking lunchtime waits are a common occurrence, with locals and tourists all looking for something good to
            eat.
            It is placed in the heart of old Soho.</p>

    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>

</body>

</html>