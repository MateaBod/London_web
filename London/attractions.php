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
    <img id="logo" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/attraction.svg" alt="Attractions">

    <h1>Attractions</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">Discover London's top attractions and stunning sights</h2>

    <!-- CONTENT start-->
    <p class="home">London has a wide range of historical and modern attractions to offer.
        </br> Find out more about places to explore during your visit.
    </p>
    <div class="content">
        <h3>Buckingham Palace</h3>
        <p>Buckingham Palace has been the Royal Family's London residence since 1837,
            and it is where Queen Elizabeth II currently lives.
            The palace is often in the focus of important occasions and royal hospitality,
            it is located in the City of Westminster.</p>

        <h3>Westminster Palace</h3>
        <p>The Houses of Parliament, commonly known as Westminster Palace,
            is a Gothic-style building where the House of Commons and the House of Lords meet (the two houses of
            Parliament of the United Kingdom).
            The Palace is located in the City of Westminster, on the north bank of the River Thames.</p>

        <h3>Westminster Abbey</h3>
        <p>Westminster Abbey, London's most famous and oldest religious building is placed in the City of Westminster
            next to the Westminster Palace.
            The monarchy is crowned and the remains of the Royal Family and famous British citizens are buried at
            Westminster Abbey.
        </p>

        <h3>Big Ben</h3>
        <p>The Great Bell of the clock tower at the north end of the Westminster Palace is known as Big Ben,
            it is one of London's most famous landmarks.
            The tower is 316 feet (96 meters) tall, with 334 steps from ground level to the belfry.</p>

        <h3>Piccadilly Circus</h3>
        <p>Piccadilly Circus is a road junction and public space in the City of Westminster in London's West End.
            Because of its suitable location and closeness to major entertainment and shopping locations,
            many locals and tourists choose to meet there.</p>

        <h3>Tower of London</h3>
        <p>The Tower of London, officially Her Majesty's Royal Palace and Fortress of the Tower of London,
            was built during the time of William the Conqueror and has served as a
            prison, royal palace, fortress, and arsenal.
            It is located in central London, on the north bank of the Thames River.</p>

        <h3>Tower Bridge</h3>
        <p>One of London's most recognizable landmarks is Tower Bridge.
            The Victorian-style drawbridge is located near the Tower of London.
            The bridge spans 800 feet (240 meters) and is constructed of two 213-foot (65-meter) bridge towers
            joined by two horizontal walkways on the top level and a central pair of bascules that open to allow
            shipping.</p>

        <h3>St Paul's Cathedral </h3>
        <p>St Paul's Cathedral, designed by Christopher Wren, is the world's second-largest cathedral,
            after St Peter's Basilica in Rome, at 365 feet tall (111 meters).
            It is situated on Ludgate Hill, the City of London's highest point.</p>

        <h3>London Eye</h3>
        <p>The London Eye, also known as the Millennium Wheel, is a cantilevered observation wheel located on the South
            Bank of the Thames.
            It took seven years to build, making it Europe's tallest cantilevered observation wheel.
            It is a design, engineering, and architectural masterpiece.</p>

        <h3>Trafalgar Square</h3>
        <p>Trafalgar Square is one of London's most famous and busiest squares,
            built in 1830 to commemorate the British victory in the Battle of Trafalgar over the French and Spanish
            fleets.
            It is located in the City of Westminster.</p>

        <h3>30 St Mary Axe</h3>
        <p>30 St Mary Axe, informally known as the Gherkin is a commercial skyscraper in London's primary financial
            area, the City of London.
            It opened in April 2004 after being finished in December 2003.
            It stands 591 feet (180 meters) tall with 41 floors.</p>

        <h3>Hyde Park</h3>
        <p> Hyde Park is the largest park in central London, covering 142 hectares.
            It is the city's most significant green lung, many tourists and locals come there to relax and breathe fresh
            air.</p>
    </div>
    <!-- CONTENT end-->

    <!-- link to the page with attraction map (maps.html) -->
    <div id="map-link">
        <a href="http://solace.ist.rit.edu/~mb4407/project2/maps.php"><img id="location" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/locator.svg"
                alt="Map"></a>
        <h3>View the Attractions map</h3>
    </div>

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>