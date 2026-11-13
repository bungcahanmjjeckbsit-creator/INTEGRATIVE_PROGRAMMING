<?php
$page = $_GET['page'] ?? 'home';
$name = $_GET['name'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JUST MJ | Personal Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Oswald:wght@500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>




<header class="navbar">

    <div class="nav-container">

        <a href="?page=home" class="logo">
            JUST MJ
        </a>

        <nav>

            <ul class="nav-links">

                <li>
                    <a href="?page=home">Home</a>
                </li>

                <li>
                    <a href="?page=about">About</a>
                </li>

                <li>
                    <a href="?page=skills">Skills</a>
                </li>

                <li>
                    <a href="?page=projects">Projects</a>
                </li>

            </ul>

        </nav>


        <button id="openFeedback" class="feedback-button">

            <i class="fa-regular fa-comment"></i>

            Feedback

        </button>

    </div>

</header>



<main>


<?php if ($page == 'home'): ?>



<section class="start-page">

    <div class="start-content">

        <p class="welcome">
            WELCOME TO MY LITTLE CORNER OF THE WEB
        </p>

        <h1>
            JUST MJ
        </h1>

        <p class="subtitle">
            IT Student • Creative • Always Learning
        </p>

        <p class="description">
            Hi, I'm MJ. An IT student who enjoys creating
            websites, learning new things, and watching
            random movies during free time.
        </p>

        <a href="?page=about" class="main-button">
            Get to Know Me
        </a>

    </div>

</section>



<?php elseif ($page == 'about'): ?>




<section class="profile-section">

    <div class="section-heading">

        <p>GET TO KNOW ME</p>

        <h1>ABOUT MJ</h1>

    </div>


    <div class="profile-card">


        <div class="profile-photo">

            <img src="jeck.jpg.jpg"
                 alt="MJ Jeck Bungcahan">

        </div>


        <h2>
            MJ JECK BUNGCAHAN
        </h2>


        <div class="info">

            <div class="info-item">

                <i class="fa-solid fa-cake-candles"></i>

                <div>
                    <span>Birthday</span>
                    <p>January 10, 2004</p>
                </div>

            </div>


            <div class="info-item">

                <i class="fa-solid fa-location-dot"></i>

                <div>
                    <span>Address</span>
                    <p>
                        Severina 18, Brgy. Marcelo Green,
                        Parañaque City
                    </p>
                </div>

            </div>


            <div class="info-item">

                <i class="fa-solid fa-film"></i>

                <div>
                    <span>Fun Fact</span>
                    <p>
                        Loves to binge-watch random movies.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>



<?php elseif ($page == 'skills'): ?>




<section class="profile-section">

    <div class="section-heading">

        <p>WHAT I LIKE TO WORK WITH</p>

        <h1>MY SKILLS</h1>

    </div>


    <div class="card-container">


        <div class="simple-card">

            <i class="fa-brands fa-html5"></i>

            <h2>HTML</h2>

            <p>
                Creating the structure of web pages.
            </p>

        </div>


        <div class="simple-card">

            <i class="fa-brands fa-css3-alt"></i>

            <h2>CSS</h2>

            <p>
                Designing and styling websites.
            </p>

        </div>


        <div class="simple-card">

            <i class="fa-brands fa-js"></i>

            <h2>JavaScript</h2>

            <p>
                Adding interaction to websites.
            </p>

        </div>


        <div class="simple-card">

            <i class="fa-brands fa-php"></i>

            <h2>PHP</h2>

            <p>
                Creating dynamic web pages.
            </p>

        </div>


        <div class="simple-card">

            <i class="fa-solid fa-database"></i>

            <h2>MySQL</h2>

            <p>
                Working with databases.
            </p>

        </div>


        <div class="simple-card">

            <i class="fa-brands fa-figma"></i>

            <h2>Figma</h2>

            <p>
                Designing website interfaces.
            </p>

        </div>


    </div>

</section>



<?php elseif ($page == 'projects'): ?>



<section class="profile-section">

    <div class="section-heading">

        <p>THINGS I'VE WORKED ON</p>

        <h1>MY PROJECTS</h1>

    </div>


    <div class="card-container">


        <div class="project-card">

            <i class="fa-solid fa-paw"></i>

            <h2>
                Pet Adoption Platform
            </h2>

            <p>
                A school project focused on helping
                an animal shelter manage pet adoption
                and donations.
            </p>

            <small>
                PHP • MySQL • HTML • CSS • JavaScript
            </small>

        </div>


        <div class="project-card">

            <i class="fa-solid fa-globe"></i>

            <h2>
                Personal Portfolio
            </h2>

            <p>
                A simple website that shows my
                personal information, skills,
                and projects.
            </p>

            <small>
                HTML • CSS • JavaScript • PHP
            </small>

        </div>


        <div class="project-card">

            <i class="fa-solid fa-database"></i>

            <h2>
                Database Project
            </h2>

            <p>
                A school project involving database
                organization and information management.
            </p>

            <small>
                PHP • MySQL
            </small>

        </div>


    </div>

</section>


<?php endif; ?>


</main>





<div class="feedback-overlay"
     id="feedbackFormContainer">


    <div class="feedback-form">


        <button id="closeFeedback"
                class="close-button">

            <i class="fa-solid fa-xmark"></i>

        </button>


        <h2>
            Send Your Feedback
        </h2>


        <form method="GET">

            <input type="hidden"
                   name="page"
                   value="<?php echo htmlspecialchars($page); ?>">


            <label>
                Name
            </label>

            <input type="text"
                   name="name"
                   placeholder="Enter your name"
                   required>


            <label>
                Email
            </label>

            <input type="email"
                   name="email"
                   placeholder="Enter your email"
                   required>


            <label>
                Message
            </label>

            <textarea name="message"
                      rows="5"
                      placeholder="Write your feedback..."
                      required></textarea>


            <button type="submit"
                    class="submit-button">

                Submit Feedback

            </button>

        </form>


        <?php if (!empty($name)): ?>

            <p class="thank-you">

                Thank you for your feedback,
                <?php echo htmlspecialchars($name); ?>!

            </p>

        <?php endif; ?>


    </div>

</div>





<button id="backToTop">

    ↑

</button>



<footer>

    <p>
        © 2026 JUST MJ
    </p>

</footer>


<script src="script.js"></script>

</body>

</html>
