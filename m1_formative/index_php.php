<?php
// Define variables for text content
$title = "Resume";
$softwareEngineer = "SOFTWARE ENGINEER";
$email = "J.G.PAGTALUNAN14@GMAIL.COM";
$fullName = "JOHN GABRIEL";
$lastName = "PAGTALUNAN";
$address = "BLOCK 12, LOT 8, CLASSICA NORTHGATE,<br>STO. CRISTO, SAN JOSE DEL MONTE,<br>BULACAN 3023";
$phoneNumber = "+639108429436";

// Education
$education = "EDUCATION";
$education1Title = "FAR EASTERN UNIVERSITY INSTITUTE OF TECHNOLOGY - UNDERGRADUATE";
$education1Years = "2021 - PRESENT";
$education1Details = "BACHELOR OF SCIENCE IN COMPUTER SCIENCE<br>MAJOR IN SOFTWARE ENGINEERING<br>A PERFECT 4.0 GWA IN MY FIRST SEMESTER AT THE UNIVERSITY (4.0 = 98% - 100% in FEU)<br>HAS GWA NOT LOWER THAN 3.0 EVERY SEMESTER (3.0 is equivalent to 89% - 92% in FEu)";
$education2Title = "POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - UNDERGRADUATE";
$education2Years = "2019 - 2020";
$education2Details = "BACHELOR OF SCIENCE IN TOURISM MANAGEMENT<br>CONSECUTIVELY AWARDED DEAN'S LISTER EACH SEMESTER";
$education3Title = "UNIVERSITY OF MAKATI - SENIOR HIGHSCHOOL";
$education3Years = "2017- 2019";
$education3Details = "MAJOR IN INFORMATION AND COMMUNICATIONS TECHNOLOGY<br>GRADUATED WITH DEAN'S LISTER REMARK";

// Skills
$skillsTitle = "SKILLS";
$skills = [
    "C Language Programming (C, C#, C++)",
    "JAVA Programming",
    "Java Script Programming",
    "Python Programming",
    "Front-end Developement (OpenGL, VB.net, etc)",
    "Web Development (JS, HTML, CSS, Bootstrap 4 and 5, PHP)",
    "Knowledge with Relational Database Management",
    "Network Administrator",
    "Data Analysis",
    "Skillful with Data Structures and Algorithms",
    "Problem Solving Skills and innate desire to self-study",
    "English Profeciency (Local Highschool Journalist)",
    "Knowledge with Design and Human Computer Interaction",
    "Adobe XD, Adobe Illustrator, Adobe Photoshop, Figma",
    "Communication Skills"
];

// Certificates
$certificatesTitle = "CERTIFICATES";
$certificates = [
    "Certified IT Specialist - JAVA from Certiport",
    "Certified CCNA Network Associate from CISCO"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="flex-container-main">
        <div class="flex-container-main-child info-bar">
            <p class="info-bar-p-se"><?php echo $softwareEngineer; ?></p>
            <p class="info-bar-p-email"><?php echo $email; ?></p>
        </div>
        <div class="flex-container-main-child content-bar">
            <div class="flex-container-main-child-contant-bar content-bar-top">
                <div class="child-content-bar-top content-bar-top-left">
                    <div class="bar-top-left-container">
                        <h3><?php echo $fullName; ?></h3>
                        <h3><?php echo $lastName; ?></h3>
                        <p><?php echo $address; ?></p>
                        <p><?php echo $phoneNumber; ?></p>
                    </div>
                </div>
                <div class="child-content-bar-top content-bar-top-right">
                    <img src="cover_photo_edited.png" alt="cover photo">
                </div>
            </div>
            <div class="flex-container-main-child-contant-bar content-bar-middle">
                <div class="content-bar-middle-top">
                    <h1><?php echo $education; ?></h1>
                </div>
                <div class="content-bar-middle-bottom">
                    <div class="middle-bottom-1">
                        <h1><?php echo $education1Title; ?></h1>
                        <p><?php echo $education1Years; ?></p>
                        <p><?php echo $education1Details; ?></p>
                    </div>
                    <div class="middle-bottom-2">
                        <h1><?php echo $education2Title; ?></h1>
                        <p><?php echo $education2Years; ?></p>
                        <p><?php echo $education2Details; ?></p>
                    </div>
                    <div class="middle-bottom-3">
                        <h1><?php echo $education3Title; ?></h1>
                        <p><?php echo $education3Years; ?></p>
                        <p><?php echo $education3Details; ?></p>
                    </div>
                </div>
            </div>
            <div class="flex-container-main-child-contant-bar content-bar-bottom">
                <div class="content-bar-bottom-top">
                    <div class="bottom-top-skills">
                        <h1><?php echo $skillsTitle; ?></h1>
                    </div>
                    <div class="bottom-top-skills_content">
                        <?php foreach ($skills as $skill) : ?>
                            <p><?php echo $skill; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="content-bar-bottom-bottom">
                    <div class="bottom-bottom-experiences">
                        <h1><?php echo $certificatesTitle; ?></h1>
                    </div>
                    <div class="bottom-bottom-experiences_content">
                        <?php foreach ($certificates as $certificate) : ?>
                            <p><?php echo $certificate; ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var viewportHeight = window.innerHeight;
    var viewportWidth = window.innerWidth;

    console.log("Viewport Height: " + viewportHeight)
    console.log("Viewport Width: " + viewportWidth)
</script>
</html>
