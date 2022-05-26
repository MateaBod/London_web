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
            <li><a class="active" href="http://solace.ist.rit.edu/~mb4407/project2/index.php">Home</a></li>
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
                <button class="dropbtn" id="other">Other
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

    <img src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/londonnmatea.png" alt="London" width="100%" height="auto">

    <h1>London</h1>

    <!-- CONTENT start-->
    <p class="home">There are countless landmarks and attractions in London that will make your visit unforgettable.
        Whether you are coming to London for the very first time or are a returning visitor,
        it is always an unforgettable experience. Find out what fun activities and places you can explore.
    </p>
    </br>
    </br>
    <div class="content">
        <p>
            London is the capital of England and the United Kingdom.
            It is the city region with the highest population placed in southeastern England, lying on both sides of the
            River Thames.
            Ever since the Romans constructed Londinium two millennia ago, London has been a major trading hub and a
            cultural center.
        </p>
    </div>
    <!-- CONTENT end-->

    <!-- links to the learn page and explore-->
    <div id="a-link">
        <div>
            <a class="Links" href="http://solace.ist.rit.edu/~mb4407/project2/learn.php">Learn</a>
        </div>
        <div>
            <a class="Links" href="http://solace.ist.rit.edu/~mb4407/project2/explore.php">Explore</a>
        </div>
    </div>

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
    
</body>

</html>