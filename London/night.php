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
            <li><a class="active"  href="http://solace.ist.rit.edu/~mb4407/project2/index.php">Home</a></li>
            <div class="dropdown">
                <button class="dropbtn">Learn</button>
                <div class="dropdown-content">
                    <a href="http://solace.ist.rit.edu/~mb4407/project2//history.php">History</a>
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
    <img id="logo" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/night.svg" alt="Night Life">

    <h1>Night Life</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">Experience London under lights</h2>

    <!-- CONTENT start-->
    <p class="home">On weekends or during the week, London is famous for its diverse and lively nightlife.
        Areas, neighborhoods, pubs, bars, and clubs offer a wide range of choices for everybody's taste.
        Below find best places to spend your night out.</p>

    <div class="content">


        <h3>Mayfair</h3>
        <p>Mayfair is one of London's most prestigious and exclusive neighborhoods,
            with five-star hotels, boutiques, restaurants, clubs, and pubs located in the heart of the city.
            Bond Street is the most famous street.</p>

        <h3>Soho</h3>
        <p>Soho should be on everyone's visit list, especially at night. It is known for its stylish restaurants,
            live music venues, great bars, and clubs and is located in central London.
            It's also the city's homosexual nightlife hotspot.</p>

        <h3>East London</h3>
        <p>East London is a lively and interesting area. It hosts a variety of huge events and is famous for its fine
            restaurants, pubs, and nightclubs.
            Shoreditch and Dalston are two of London's hippest neighborhoods.</p>

        <h3>Camden</h3>
        <p>Camden is a well-known neighborhood in northwest London for its market and active bohemian nightlife.
            If you enjoy live music, this is the place to visit.
            All who visit the area's bars and pubs will undoubtedly be impressed.</p>

        <h3>South Kensington</h3>
        <p>Kensington is one of London's most expensive districts.
            It's also known for its high-end restaurants and elite nightclubs,
            making it a great area to grab a drink and enjoy London's nightlife.</p>
    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>