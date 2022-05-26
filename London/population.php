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
    <img id="logo" src="http://solace.ist.rit.edu/~mb4407/project2/assets/image/people.svg" alt="Population">

    <h1>Population</h1>
    <h2 id="hover" onmouseover="hoverRed(this)" onmouseout="normalblack(this)">Learn more about the Londoners</h2>

    <!-- CONTENT start-->
   
        <p class="home">The population of London is estimated to be 9,540,576 people in 2022.</br>
            London is by far the most populous city in the United Kingdom and the third-largest city in Europe.</p>

            <div class="content">
        <h3>Population growth through history </h3>
        <p>With a population of roughly 60,000 people, it swiftly became the capital of Rome's Britannia province.
            After the Romans left, the city was mostly abandoned in favor of Lundenwic, which had a population of nearly
            10,000 people that were vulnerable to Viking attacks,
            thus it was soon relocated to the old Londinium to make use of the ancient Roman city walls.
            The city prospered and grew rapidly after then.
            London's role as one of the world's major trading hubs grew as the British Empire grew, and shortly after
            1800,
            London had a population of one million inhabitants.
            Industrialization resulted in increased urbanization, which, when paired with London's expanding prominence,
            resulted in some significant population growth. From 959,300 in 1801 to 5,572,012 in 1891, the population of
            London expanded by more than fivefold.
            London was the world's biggest city during the nineteenth and early twentieth centuries. London's population
            peaked in 1939, after rapid expansion
            in the first half of the twentieth century.
            By the beginning of World War II, London had a population of 8,615,245 residents, regardless of the fact
            that it
            had just lost its title as
            the world's biggest city to New York.
            London's population decreased dramatically from the end of World War II until the 1980s when the population
            had
            dropped to 6,607,513.However, in the 1980s, a population boom occurred,
            and a growing economy mixed with greater immigration has resulted in a growth in population once again.
            After 20 years, the population had risen to 7,172,036 people,and further increase of the population past 9
            million by 2021.</p>

        <h3>Diversities in population</h3>
        <p>London's diversity in population can be seen in insights into London residents' nation of birth and their
            religions. 37% of inhabitants were born outside of the United Kingdom.
            Of these roughly a third were born inside European Union nations, while the other two-thirds were born
            outside
            of the European Union.
            The most common nation of birth for London inhabitants outside of the UK is India.
            Regarding religion, 48.4% of Londoners considered themselves to be Christian,
            12.39% considered themselves Muslim, 5% Hindu, 1.82% Jewish, 1.5% Sikh, 1% Buddhist and 0.6% Other. While a
            large percentage,20.73% of them claim not to follow any religion
        </p>
    </div>
    <!-- CONTENT end-->

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>
</body>

</html>