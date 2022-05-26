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
    <img id="logo" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/history.svg" alt="History">

    <h1>History</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">Learn more about London's history</h2>

    <!-- CONTENT start-->
    <p class="home">London is among the oldest of the world's great cities. Two millennia ago, the Romans founded
        Londinium beside the Thames River.
        The city had been invaded and was completely destroyed.
        The city was reconstructed by the Romans, and London became a major trading hub and culture center.
    </p>
    <div class="content">
        <p>During the fifth century Londinium was constantly attacked from Anglo-Saxons. With time the city became the
            capital city of the Essex Kingdom. </p>
        <p>The settlement was repeatedly attacked by Vikings in the ninth century. Danish settlers settled in the area,
            fostering trade and establishing enterprises, developing the settlement into England's first urban center.
        </p>
        <p>Following the Norman invasion and conquest of England in the 11th century, the newly crowned King of England,
            William Duke of Normandy, established the city's current rights, rules, and privileges. During William's
            reign, the Tower of London was constructed.</p>
        <p> Although England lacked a capital city, the fact that the government and all-essential institutions were
            located in Westminster, adjacent to London, aided the city's development into the major city it is today.
        </p>
        <p>London's harbor became a European hub for the distribution of products during the fourteenth century. This
            activity was boosted in the fifteenth century by the presence of strong textile industry.
            London benefited from centralized politics and the development of maritime trade from the sixteenth to the
            mid-seventeenth centuries.</p>
        <p>The Great Plague, which killed 70,000 people in the 17th century, was caused by the horrible living
            conditions of the population, and the next year, a massive fire destroyed most of the city.</p>
        <p>While the capital was being rebuilt, architect Christopher Wren's masterpieces such as St. Paul's Cathedral
            increased its appeal, and the capital became the center of English social life with palaces, halls,
            theatres, and museums. Following that, London continued to expand.</p>
        <p>The majority of modern-day London dates from the Victorian era. The capital was confined to the old Roman
            city's boundaries, as well as Westminster and Mayfair, until the early nineteenth century, and was bordered
            by fields. Regardless, the Industrial Revolution drove millions of people to London, resulting in the city's
            expansion.</p>
        <p> With a population of roughly 3.5 million people, London is now acknowledged as a significant worldwide
            commercial and financial center.</p>
    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>