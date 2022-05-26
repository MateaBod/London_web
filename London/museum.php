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
    <img id="logo" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/museum.svg" alt="Museums">

    <h1>Museums</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">Discover the Museums of London</h2>

    <!-- CONTENT start-->
    <p class="home">Museums are one of the many things London excels at. There is one for each and everyone's
        interest.
        </br>Below find excellent museums London has to offer.
    </p>

    <div class="content">

        <h3>British Museum</h3>
        <p>The British Museum, in Bloomsbury, is a public museum dedicated to human history, art, and culture.
            It houses one of the world's largest and most famous antique collections.
            The British Museum is one of the oldest museums in the world, with over 5 million visitors each year.</p>

        <h3>Natural History Museum</h3>
        <p>The Natural History Museum is located in South Kensington, it is dedicated to the natural world, its history,
            and its specimens.
            It houses a significant collection of over 70,000 species and natural history objects.
            The museum is known for its collection of dinosaur skeletons as well as its magnificent building.</p>

        <h3>Science Museum</h3>
        <p>The Science Museum is an interactive museum that teaches visitors about science and technology in a fun and
            engaging way.
            It is located in the South Kensington neighborhood.
            The Science Museum, which opened in 1857 and now attracts 3.3 million people yearly, is one of the city's
            most popular tourist attractions.</p>

        <h3> Imperial War Museum</h3>
        <p>The Imperial War Museum in London houses the atomic bomb, a human torpedo, tanks, and military aircraft.
            The Imperial War Museum's goal is to help people understand the conflicts in which British forces have been
            involved,
            with a special emphasis on the impact they had on the population.</p>

        <h3>National Gallery</h3>
        <p>The National Gallery is London's most significant art museum, and is also one of the most well-known in the
            world.
            It was established in 1824 and now holds a collection of over 2,300 paintings dating from the mid-13th
            century to 1900.
            The National Gallery is located on the north side of Trafalgar Square.
        </p>

        <h3> Madame Tussauds Museum</h3>
        <p>Madame Tussauds Museum initially opened in London in 1884 and houses wax figures of celebrities from around
            the world,
            it is the most famous wax museum due to its high quality and creativity.
            Madame Tussauds is a major tourist attraction.</p>
    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>