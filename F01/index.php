<?php
include("connect.php");
include("classes.php");

$query = "SELECT * FROM athleteinformation";
$result = executeQuery($query);

$athletes = [];

while ($row = mysqli_fetch_assoc($result)) {
    $athletes[] = new Athlete(
        $row['athleteID'],
        $row['image'],
        $row['name'],
        $row['description'],
        $row['socialmedia']
    );
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinoy AthLIFT Home</title>
    <link rel="icon" href="assets/logo2.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-xl shadow">
        <div class="container">
            <a class="navbar-brand text-content" href="#">
                <img src="assets/logo.png" alt="GenDev" width="auto" height="50" class="mx-1 align-text-middle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center justify-content-lg-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="btn btn-nav mx-2" id="homeBtn">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="media.html" class="btn btn-nav mx-2" id="projectsBtn">Athletes Media</a>
                    </li>
                    <li class="nav-item">
                        <a href="forms.html" class="btn btn-nav mx-2" id="contactBtn">Donate Now!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </nav>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('assets/C0.png'); height: 92vh;">
                <div class="carousel-caption p-0">
                    <div class="col-12 col-md-12 col-lg-4 text-center text-start text-md-center text-lg-start">
                        <h1 class="text-content ">FILIPINO ATHLETES</h1>
                        <p class="text-content">Your support can make all the difference! Stand alongside our athletes
                            as they push their limits, giving them the encouragement, resources, and opportunities they
                            need to succeed. Together, we can help them achieve greatness and bring pride to our
                            country. Your belief in them fuels their journey to victory!
                        </p>
                        <a href="forms.html" button class="btn btn-outline-light">Show Your Support for Our Athletes</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/C1.png'); height: 92vh;">
                <div class="carousel-caption p-0">
                    <div class="col-12 col-md-12 col-lg-4 text-center text-start text-md-center text-lg-start">
                        <h1 class="text-content">CARE</h1>
                        <p class="text-content">Genuine care goes a long way. Support our athletes’ well-being by
                            helping them access the resources, guidance, and encouragement they need to excel and
                            represent our country with honor.
                        </p>
                        <a href="forms.html" button class="btn btn-outline-light">Show Your Support for Our Athletes</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/C2.png'); height: 92vh;">
                <div class="carousel-caption p-0">
                    <div class="col-12 col-md-12 col-lg-4 text-center text-start text-md-center text-lg-start">
                        <h1 class="text-content">ENCOURAGEMENT</h1>
                        <p class="text-content">Inspire our athletes to dream big and aim high. Your words of
                            encouragement and belief in their abilities can fuel their drive to succeed and make our
                            nation proud.
                        </p>
                        <a href="forms.html" button class="btn btn-outline-light">Show Your Support for Our Athletes</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/C3.png'); height: 92vh;">
                <div class="carousel-caption p-0">
                    <div class="col-12 col-md-12 col-lg-4 text-center text-start text-md-center text-lg-start">
                        <h1 class="text-content">PRIDE</h1>
                        <p class="text-content">Take pride in the achievements of our Filipino athletes. By celebrating
                            their victories and sharing their stories, we show the world that the Filipino spirit is
                            unstoppable. Together, we can inspire the next generation of champions.
                        </p>
                        <a href="forms.html" button class="btn btn-outline-light">Show Your Support for Our Athletes</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/C4.png'); height: 92vh;">
                <div class="carousel-caption p-0">
                    <div class="col-12 col-md-12 col-lg-4 text-center text-start text-md-center text-lg-start">
                        <h1 class="text-content">SUPPORT</h1>
                        <p class="text-content">Be the strength that uplifts our athletes. Your support—whether through
                            donations, cheering them on, or spreading awareness—gives them the motivation to keep
                            striving for greatness.
                        </p>
                        <a href="forms.html" button class="btn btn-outline-light">Show Your Support for Our Athletes</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('assets/C5.png'); height: 92vh;">
                <div class="carousel-caption p-0">
                    <div class="col-12 col-md-12 col-lg-4 text-center text-start text-md-center text-lg-start">
                        <h1 class="text-content">LOVE</h1>
                        <p class="text-content">Show your love for our Filipino athletes by standing with them every
                            step of the way. Let them feel the warmth of our nation’s pride and affection, reminding
                            them that they are never alone in their journey.
                        </p>
                        <a href="forms.html" button class="btn btn-outline-light">Show Your Support for Our Athletes</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section>
    <div class="containerTheme gradient-bg">
        <div class="row mb-3">
            <div class="col">
                <div class="image-container text-center ">
                    <img src="assets/logo.png" alt="Descriptive Alt Text">
                    <p class="image-description">Pinoy AthLIFT: Pinoy Pride in Every Stride is a dynamic platform that
                        connects the Filipino community with Filipino athletes and aspiring athletes, celebrating their
                        dedication and achievements. By offering a space for support through donations, the website
                        helps empower athletes to continue their training and represent the Philippines on the world
                        stage. It also serves as a hub for announcements on upcoming events and activities, inspiring
                        the community to get involved and show their pride. Join us in supporting and uplifting our
                        athletes as we encourage more Filipinos to chase their dreams and embody the spirit of Pinoy
                        pride.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="containerPowerhouse">
        <h1>Pinoy Powerhouses</h1>
        <p>
            Meet the incredible Filipino athletes who have made their mark on the world, bringing pride and honor to the
            Philippines with every victory. These champions inspire countless young athletes to chase their dreams and
            strive for greatness, showing that with hard work and dedication, anything is possible.
        </p>
        <p>
            Yet, the journey doesn’t come easy. Many athletes need financial support to continue their training and
            represent our country on the global stage. That’s why Pinoy AthLIFT exists—to be the bridge that helps our
            athletes get the resources they need to push their limits and compete internationally. Together, we can help
            these rising stars shine brighter and take our country’s pride to new heights.
        </p>
        <div class="row mx-5 justify-content-center">
            <div class="col-xxl-1 my-4"></div>
            <?php
            foreach ($athletes as $athlete) {
                echo $athlete->generateAthleteCard();
            }
            ?>
            <div class="col-xxl-1 my-4"></div>
        </div>

        <div class="row mx-5 my-5 justify-content-center position-relative section-bg">
            <div class="col-12 text-center my-4">
                <h2 class="fw-bold text-white">Support Our Pinoy Athletes</h2>
                <p class="text-light fs-5">
                    Filipino athletes like Carlos Yulo, Hidilyn Diaz, EJ Obiena, Nesthy Petecio, and Margielyn Didal
                    have
                    brought immense pride to our nation.
                    They inspire us through their dedication, hard work, and achievements on the world stage.
                    Your generosity can help them continue their journey, compete globally, and bring more glory to the
                    Philippines.
                </p>
            </div>
            <div class="col-12 text-center">
                <a href="forms.html" class="btn btn-lg text-white donation-btn">
                    Donate Now
                </a>
            </div>
        </div>
    </div>

    <footer class="footer py-2">
        <div class="container text-center text-white">
            <div class="row mt-3">
                <div class="col-12">
                    <p class="mb-0">&copy; 2025 Support Pinoy Athletes. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>