<?php

include("_includes/config.inc");
include("_includes/dbconnect.inc");
include("_includes/functions.inc");

echo template("templates/partials/header.php");

if (isset($_GET['return'])) {
    $msg = "";
    if ($_GET['return'] == "fail") {
        $msg = "Login Failed. Please try again.";
    }
    $data['message'] = "<p>$msg</p>";
}

if (isset($_SESSION['id'])) {
    $data['content'] = "
    <div class='row mt-5'> <!-- Added mt-5 class for margin from the top -->
        <div class='col-md-6 d-flex align-items-center justify-content-center'>
            <img src='img/bnu.jpg' class='img-fluid' alt='Bucks New University'>
        </div>
        <div class='col-md-6 d-flex align-items-center justify-content-center'>
            <div>
                <h2 class='text-center'>About Bucks New University</h2>
                <p>Bucks New University is a dynamic, professional, and friendly place to study. We have around 9,000 students from over 65 countries, offering a diverse learning environment. With a high 96.1% employability rate, our graduates are well-prepared for their careers. Our four schools provide a wide range of courses, ensuring students have ample opportunities to pursue their passions. Our commitment to supporting graduate employability is evident in our impressive track record, with 94.7% of our students in work or further study six months after graduation. Come and join us on our journey of learning and success!</p>
            </div>
        </div>
    </div>
    ";
    echo template("templates/partials/nav.php");
    echo template("templates/default.php", $data);
} else {
    echo template("templates/login.php", $data);
}

echo template("templates/partials/footer.php");

// another test edit

?>