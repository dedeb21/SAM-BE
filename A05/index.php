<?php
include("connect.php");
include("classes.php");

$quarters = array();

$getIslandQuery = "
    SELECT 
        ip.islandOfPersonalityID,
        ip.name AS island_name, 
        ip.longDescription AS long_desc, 
        ic.islandContentID,
        ic.content AS content, 
        ic.image AS island_image,
        ip.image AS personality_image
    FROM islandsofpersonality ip
    JOIN islandcontents ic ON ip.islandOfPersonalityID = ic.islandOfPersonalityID
    ORDER BY ip.islandOfPersonalityID, ic.islandContentID
";

$getIslandResult = executeQuery($getIslandQuery);

if (!$getIslandResult) {
    die('Query failed: ' . mysqli_error($connection));
}

while ($row = mysqli_fetch_assoc($getIslandResult)) {
    $a = new Island(
        $row['island_name'],
        $row['long_desc'],
        $row['content'],
        $row['island_image'],
        $row['personality_image'],
        $row['islandContentID'],
        $row['islandOfPersonalityID']
    );

    if (!isset($quarters[$row['islandOfPersonalityID']])) {
        $quarters[$row['islandOfPersonalityID']] = array();
    }
    array_push($quarters[$row['islandOfPersonalityID']], $a);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGPE</title>
    <link rel="icon" href="asset/MGPELogo.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: "Poppins", serif;
            font-weight: 400;
            font-style: normal;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url('asset/BG.png');
            background-position: center;
            background-repeat: repeat;
        }

        .navbar {
            background: linear-gradient(90deg, #0141a3, #009ffb) !important;
            color: white;
            box-shadow: 0 10px 25px rgba(206, 166, 166, 0.7);
        }

        .card {
            width: auto;
            height: 100%;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            object-position: center;
        }

        .card-header {
            position: relative;
            padding: 0;
        }

        .image-container {
            width: 100%;
            height: 100%;
        }

        .image-container img {
            object-fit: cover;
            width: 100%;
            height: 100%;
            object-position: center;
        }

        h1 {
            font-family: "Poppins", serif;
            font-weight: 700;
            font-style: normal;
            text-shadow: #000000;
            color: #0141a3;
        }


        h3 {
            font-family: "Poppins", serif;
            font-weight: 700;
            font-style: normal;
            text-align: center;
            font-size: 45px;
            letter-spacing: 3px;
            text-shadow: #000000;
            color: #0141a3;
        }

        h5 {
            font-family: "Poppins", serif;
            font-weight: 400;
            font-style: normal;
        }

        .white-bg {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(137, 57, 57, 0.1);
        }

        .imgCon {
            max-width: 100%;
            height: auto;
        }

        .imgCon img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        .cards {
            margin: 0;
            padding: 0;
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .cardsTitle {
            margin: 0;
            padding: 0;
            width: 100%;
            max-width: 300px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .cards img {
            width: 100%;
            height: auto;
            border-top-left-radius: 1px;
            border-top-right-radius: 15px;
        }

        .cardsTitle span {
            display: block;
            padding: 15px;
            background-image: linear-gradient(to right, #0141a3, #009ffb);
            color: white;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 1px;
            transition: all 0.3s ease;
        }

        .cardsTitle:hover {
            background-image: linear-gradient(to right, #0141a3, #009ffb);
            transform: scale(1.05);
        }

        .popover {
            position: absolute;
            bottom: 60px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(14, 110, 220, 0.75);
            color: white;
            padding: 10px;
            border-radius: 8px;
            font-size: 14px;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            white-space: nowrap;
        }

        .cards:hover .popover {
            opacity: 1;
            visibility: visible;
        }

        .container {
            border-radius: 15px;
            overflow: hidden;
        }

        footer {
            background: linear-gradient(90deg, #1a2e40, #3b5d77) !important;
            color: white;
            margin-top: 10px;
            box-shadow: 0 10px 25px rgba(255, 255, 255, 0.7);
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-custom shadow">
        <div class="container">
            <a class="navbar-brand mx-auto" href="#">
                <img src="asset/MGPELogo.png" alt="HP" width="auto" height="60" class="align-text-middle">
            </a>
        </div>
    </nav>

    <div class="w3-display-container w3-animate-opacity">
        <img src="asset/LM.png" alt="boat" style="width:100%; max-height:600px; object-fit:cover;">
    </div>

    <div class="container white-bg mt-2">
        <div class="row">
            <div class="col">
                <h1 class="text-uppercase text-center ">DISCOVER GENREV'S ISLANDS OF PERSONALITY!</h1>
                <h5 class="text-center fw-light mt-1">Genrev, a passionate student leader dedicated to serving others,
                    invites us to explore the core of his unique personality. Dive deeper into the traits and
                    experiences that have shaped him into the person he is today, as we uncover the building blocks of
                    what makes Genrev truly remarkable.</h5>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="cardsTitle m-2">
            <span>Leadership</span>
        </div>
        <div class="cardsTitle m-2">
            <span>Travel</span>
        </div>
        <div class="cardsTitle m-2">
            <span>Source of Happiness</span>
        </div>
        <div class="cardsTitle m-2">
            <span>Volunteering Activities</span>
        </div>

        <div class="container imgCon">
            <div class="col">
                <div class="row">
                </div>
    
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <?php
                        foreach ($quarters as $personalityID => $islands) {
                            $firstIsland = $islands[0];
                            echo $firstIsland->generatePersonalityHeader(); 
                            foreach ($islands as $island) {
                                echo $island->generateContentCard();
                            }
                            echo Island::closePersonalitySection();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer text-center mt-2">
            <div class="container-fluid p-3" style="background-color: #009ffb;"></div>
            <div class="text-center p-3" style="background-color: #0141a3;">
                © 2024 Copyright: Mc Genrev P. Egar
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
            </script>
</body>

</html>