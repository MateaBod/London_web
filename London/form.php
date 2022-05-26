<!-- Matea Boderistanac 
Individual project part 1
-->
<?php

include('../../dbconn.php');

$sql = "SELECT question, email FROM project";
$result = $mysqli->query($sql);

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if ($result = $mysqli->query($sql)) {
} else {
    printf("Query failed: %s\n", $mysqli->error);
}

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "<li> email: " . $row["email"] . " - Question: " . $row["question"] . "</li>";
    }
} else {
    echo "0 results";
}

?> 
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

    <h1>Do You want to visit London?</h1>

    <p >For more informations about your trip submit the form below</br> and we will reply shortly</p>

      <!-- PHP START -->
    <?php

    if ($mysqli) {

        if (!empty($_GET['email']) && !empty($_GET['question'])) {


            $stmt = $mysqli->prepare("INSERT into project (email, question) values (?, ?)");

            $stmt->bind_param("ss", $_GET['email'], $_GET['question']);
            $stmt->execute();
            $stmt->close();
            $mysqli->close();
        }
    }

    ?>
        <!-- PHP END  -->
    
    
        <div class="container">

            <!-- FORM START -->
            <form name="formm" action="form.php" onsubmit="validateForm();">
              <div class="row">
                <div class="col-25">
                  <label for="fname">Email:</label>
                </div>
                <div class="col-75">
                  <input type="email" id="email" name="email" placeholder="Your email..">
                </div>
              </div>
            
              <div class="row">
                <div class="col">
                  <textarea id="question" name="question" placeholder="Ask a question.." style="height:200px"></textarea>
                </div>
              </div>
              <div class="row">
                <input  type="submit" value="Submit" onsubmit="return validateForm()">
              </div>
            </form>
              <!-- FORM END -->
          </div>
        </div>

    <!-- FOOTER-->
    <?php
    include('footer.php');
    ?>

</body>

</html>