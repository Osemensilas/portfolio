<?php

$fullname = $email = $message = '';
$error = '';
$error_msg = $success = $success = $loading = '';

if (isset($_POST['submit'])) {
    if (empty(trim($_POST['firstname']))) {
        $error = 'Name Required';
        $error_msg = 'active';
    } else {
        $fullname = htmlspecialchars($_POST['firstname']);

        if (!preg_match('/^[a-zA-Z|| ]+$/', $fullname)) {
            $error = 'Invalid name';
            $error_msg = 'active';
        } else {
            if (strlen($fullname) > 30) {
                $error = 'Name too long';
                $error_msg = 'active';
            } else {
                if (empty(trim($_POST['email']))) {
                    $error = 'Email address Required';
                    $error_msg = 'active';
                } else {
                    $email = htmlspecialchars($_POST['email']);

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error = 'Invalid email address';
                        $error_msg = 'active';
                    } else {
                        if (strlen($email) > 50) {
                            $error = 'Email address too long';
                            $error_msg = 'active';
                        } else {
                            if (empty(trim($_POST['typed_msg']))) {
                                $error = 'Message required';
                                $error_msg = 'active';
                            } else {
                                $loading = 'active';
                                $message = htmlspecialchars($_POST['typed_msg']);
                                $subject = 'From: ' . $fullname;
                                $additional = 'Sender email address: ' . $email;

                                if (mail('osemensilas@gmail.com', $subject, $message, $additional)) {
                                    $success = 'active';
                                    $loading = '';
                                } else {
                                    $error = 'Message not send. Check connection';
                                    $error_msg = 'active';
                                    $success = '';
                                    $loading = '';
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osemen Silas Portfolio - Personal Portfolio</title>
    <link rel="stylesheet" href="../private/css/index.css">
    <link rel="stylesheet" href="../private/css/media.css">
</head>

<body>
    <div class="background-img">

    </div>
    <!--Header Begins-->
    <header id="header">
        <div class="header">
            <div class="header-left">
                <div class="header-left-img-container">
                    <img src="../private/imgs/web_dev_logo.png" alt="">
                </div>
            </div>
            <div class="header-right">
                <div class="header-nav-container">
                    <a href="#" class="header-homepage">Home</a>
                    <a href="#skills" class="header-skills">Skills</a>
                    <a href="#projects" class="header-project">Projects</a>
                    <a href="#contact-me" class="header-contact">Contact Me</a>
                    <a href="#about-me" class="header-about">About Me</a>
                </div>
                <div class="hamburger-container">
                    <div class="hamburger"></div>
                </div>
                <div class="upwork-contact-me-container">
                    <a href="#" class="contact-me-upwork">Get Intouch</a>
                </div>
            </div>
        </div>
    </header>
    <!--Header Ends-->
    <!--Hero Begins-->
    <section id="hero" class="hero_id">
        <img class="hero-back-img-system" src="../private/imgs/portfolio_system1.jpg" alt="">
        <img class="hero-back-img-phone" src="../private/imgs/dark_back_media.jpg" alt="">
        <div class="hero">
            <div class="hero-top">
                <div class="hero-top-content">
                    <h2>Web Developer and Designer at Upwork</h2>
                    <h4>You think, I design and build the website for your blog, portfolio, landing page, or business.</h4>
                </div>
            </div>
            <div class="hero-bottom">
                <div class="hero-bottom-content">
                    <img src="../private/imgs/php.png" alt="">
                    <img src="../private/imgs/illustrator.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--Hero Ends-->
    <!--Skills Begins-->
    <section id="skills" class="skills_id">
        <div class="skills">
            <div class="skills-header">
                <h2>Skills</h2>
            </div>
            <div class="skills-contents">
                <div class="skill-major-name">
                    <div class="skill-major-name-content">
                        <h2>Front-end Design</h2>
                        <h2>Fullstack Design</h2>
                        <h2>Wordpress Design</h2>
                    </div>
                </div>
                <div class="skills-content">
                    <div class="skills-card">
                        <div class="skills-card-top">
                            <h4>Front-end Design</h4>
                        </div>
                        <div class="skills-card-bottom">
                            <p>I design front-end projects using:</p>
                            <ul>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/html.png" alt="">HTML/HTML5
                                        </div>
                                        <div class="percentage-details">
                                            98%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-eight"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/css-3.png" alt="">CSS
                                        </div>
                                        <div class="percentage-details">
                                            98%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-eight"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/java-script.png" alt="">JavaScript
                                        </div>
                                        <div class="percentage-details">
                                            95%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-five"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/illustrator.png" alt="">Adobe Illustrator
                                        </div>
                                        <div class="percentage-details">
                                            90%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/photoshop.png" alt="">Photoshop
                                        </div>
                                        <div class="percentage-details">
                                            90%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="skills-card">
                        <div class="skills-card-top">
                            <h4>Fullstack Design</h4>
                        </div>
                        <div class="skills-card-bottom">
                            <p>I design fullstack projects using:</p>
                            <ul>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/html.png" alt="">HTML/HTML5
                                        </div>
                                        <div class="percentage-details">
                                            98%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-eight"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/css-3.png" alt="">CSS
                                        </div>
                                        <div class="percentage-details">
                                            98%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-eight"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/java-script.png" alt="">JavaScript
                                        </div>
                                        <div class="percentage-details">
                                            95%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-five"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/php.png" alt="">PHP
                                        </div>
                                        <div class="percentage-details">
                                            98%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-eight"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/mysql.png" alt="">MySQL Database
                                        </div>
                                        <div class="percentage-details">
                                            98%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-eight"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/illustrator.png" alt="">Adobe Illustrator
                                        </div>
                                        <div class="percentage-details">
                                            90%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/photoshop.png" alt="">Adobe Photoshop
                                        </div>
                                        <div class="percentage-details">
                                            90%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="skills-card">
                        <div class="skills-card-top">
                            <h4>Wordpress Design</h4>
                        </div>
                        <div class="skills-card-bottom">
                            <p>I design wordpress projects using:</p>
                            <ul>
                                <li>
                                    <div class="skill-name-container">
                                        <div class="skill-name-content">
                                            <img src="../private/imgs/wordpress.png" alt="">Wordpress
                                        </div>
                                        <div class="percentage-details">
                                            98%
                                        </div>
                                    </div>
                                    <div class="percentage-conatiner">
                                        <div class="percentage">
                                            <div class="percent ninty-eight"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Skills Ends-->
    <!--Projects Begins-->
    <section id="projects" class="projects_id">
        <div class="projects">
            <div class="projects-header">
                <h2>Projects</h2>
            </div>
            <div class="projects-container">
                <div class="project">
                    <div class="project-top">
                        <img src="../private/uploads/pet_img.png" alt="" class="project-hero-img">
                    </div>
                    <div class="project-bottom">
                        <div class="project-name">
                            <h4>Landing Page</h4>
                        </div>
                        <div class="project-view-details-btn-container">
                            <div class="view-details-btn">
                                See Project Details
                            </div>
                        </div>
                        <div class="full-project-details">
                            <div class="full-project-nav">
                                <div class="full-project-cancel-btn-container">
                                    <div class="full-cancel"></div>
                                </div>
                            </div>
                            <div class="full-project-container">
                                <div class="full-project-right">
                                    <div class="full-project-img-container">
                                        <img src="../private/uploads/pet_img.png" alt="" class="full-project-img">
                                    </div>
                                </div>
                                <div class="full-project-left">
                                    <div class="full-project-detail">
                                        <div class="full-project-header">
                                            <h2>Landing Page</h2>
                                        </div>
                                        <div class="full-project-detail">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                        </div>
                                        <div class="goto-project-container">
                                            <a href="#" target="_blank" class="goto-project">See Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project-top">
                        <img src="../private/uploads/blog_img.png" alt="" class="project-hero-img">
                    </div>
                    <div class="project-bottom">
                        <div class="project-name">
                            <h4>E-commerce Store</h4>
                        </div>
                        <div class="project-view-details-btn-container">
                            <div class="view-details-btn">
                                See Project Details
                            </div>
                        </div>
                        <div class="full-project-details">
                            <div class="full-project-nav">
                                <div class="full-project-cancel-btn-container">
                                    <div class="full-cancel"></div>
                                </div>
                            </div>
                            <div class="full-project-container">
                                <div class="full-project-right">
                                    <div class="full-project-img-container">
                                        <img src="../private/uploads/blog_img.png" alt="" class="full-project-img">
                                    </div>
                                </div>
                                <div class="full-project-left">
                                    <div class="full-project-detail">
                                        <div class="full-project-header">
                                            <h2>Landing Page</h2>
                                        </div>
                                        <div class="full-project-detail">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                        </div>
                                        <div class="goto-project-container">
                                            <a href="#" target="_blank" class="goto-project">See Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project-top">
                        <img src="../private/uploads/landing_page.png" alt="" class="project-hero-img">
                    </div>
                    <div class="project-bottom">
                        <div class="project-name">
                            <h4>Landing Page</h4>
                        </div>
                        <div class="project-view-details-btn-container">
                            <div class="view-details-btn">
                                See Project Details
                            </div>
                        </div>
                        <div class="full-project-details">
                            <div class="full-project-nav">
                                <div class="full-project-cancel-btn-container">
                                    <div class="full-cancel"></div>
                                </div>
                            </div>
                            <div class="full-project-container">
                                <div class="full-project-right">
                                    <div class="full-project-img-container">
                                        <img src="../private/uploads/landing_page.png" alt="" class="full-project-img">
                                    </div>
                                </div>
                                <div class="full-project-left">
                                    <div class="full-project-detail">
                                        <div class="full-project-header">
                                            <h2>Landing Page</h2>
                                        </div>
                                        <div class="full-project-detail">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <h3>Loerm</h3>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                        </div>
                                        <div class="goto-project-container">
                                            <a href="#" target="_blank" class="goto-project">See Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project-top">
                        <img src="../private/uploads/pet_img.png" alt="" class="project-hero-img">
                    </div>
                    <div class="project-bottom">
                        <div class="project-name">
                            <h4>Landing Page</h4>
                        </div>
                        <div class="project-view-details-btn-container">
                            <div class="view-details-btn">
                                See Project Details
                            </div>
                        </div>
                        <div class="full-project-details">
                            <div class="full-project-nav">
                                <div class="full-project-cancel-btn-container">
                                    <div class="full-cancel"></div>
                                </div>
                            </div>
                            <div class="full-project-container">
                                <div class="full-project-right">
                                    <div class="full-project-img-container">
                                        <img src="../private/uploads/pet_img.png" alt="" class="full-project-img">
                                    </div>
                                </div>
                                <div class="full-project-left">
                                    <div class="full-project-detail">
                                        <div class="full-project-header">
                                            <h2>Landing Page</h2>
                                        </div>
                                        <div class="full-project-detail">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <h3>Loerm</h3>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                        </div>
                                        <div class="goto-project-container">
                                            <a href="#" target="_blank" class="goto-project">See Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project-top">
                        <img src="../private/uploads/pet_img.png" alt="" class="project-hero-img">
                    </div>
                    <div class="project-bottom">
                        <div class="project-name">
                            <h4>E-commerce Store</h4>
                        </div>
                        <div class="project-view-details-btn-container">
                            <div class="view-details-btn">
                                See Project Details
                            </div>
                        </div>
                        <div class="full-project-details">
                            <div class="full-project-nav">
                                <div class="full-project-cancel-btn-container">
                                    <div class="full-cancel"></div>
                                </div>
                            </div>
                            <div class="full-project-container">
                                <div class="full-project-right">
                                    <div class="full-project-img-container">
                                        <img src="../private/uploads/pet_img.png" alt="" class="full-project-img">
                                    </div>
                                </div>
                                <div class="full-project-left">
                                    <div class="full-project-detail">
                                        <div class="full-project-header">
                                            <h2>Landing Page</h2>
                                        </div>
                                        <div class="full-project-detail">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <h3>Loerm</h3>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                        </div>
                                        <div class="goto-project-container">
                                            <a href="#" target="_blank" class="goto-project">See Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project-top">
                        <img src="../private/uploads/pet_img.png" alt="" class="project-hero-img">
                    </div>
                    <div class="project-bottom">
                        <div class="project-name">
                            <h4>Landing Page</h4>
                        </div>
                        <div class="project-view-details-btn-container">
                            <div class="view-details-btn">
                                See Project Details
                            </div>
                        </div>
                        <div class="full-project-details">
                            <div class="full-project-nav">
                                <div class="full-project-cancel-btn-container">
                                    <div class="full-cancel"></div>
                                </div>
                            </div>
                            <div class="full-project-container">
                                <div class="full-project-right">
                                    <div class="full-project-img-container">
                                        <img src="../private/uploads/pet_img.png" alt="" class="full-project-img">
                                    </div>
                                </div>
                                <div class="full-project-left">
                                    <div class="full-project-detail">
                                        <div class="full-project-header">
                                            <h2>Landing Page</h2>
                                        </div>
                                        <div class="full-project-detail">
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <h3>Loerm</h3>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum nesciunt doloremque delectus dolores temporibus modi quis, veritatis excepturi vitae amet magnam doloribus cumque ducimus. Harum error aliquid
                                                nulla earum obcaecati.</p>
                                        </div>
                                        <div class="goto-project-container">
                                            <a href="#" target="_blank" class="goto-project">See Project</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Projects Ends-->
    <!--Contact Me Begins-->
    <section id="contact-me" class="contact_me_id">
        <div class="contact-me">
            <div class="contact-me-header">
                <h2>Contact Me</h2>
            </div>
            <div class="contact-me-content">
                <div class="contact-me-content-left">
                    <form action="index.php" class="contact-me-form" method="POST">
                        <div class="error <?php echo $error_msg; ?>"><?php echo $error; ?></div>
                        <div class="success"></div>
                        <div class="form-details">
                            <label for="firstname">Name:</label>
                            <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($fullname); ?>" class="firstname" title="firstname">
                        </div>
                        <div class="form-details">
                            <label for="email">Email:</label>
                            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" class="email" title="email">
                        </div>
                        <div class="form-msg-details">
                            <label for="typed_msg">Message:</label>
                            <textarea name="typed_msg" id="typed_msg" class="typed-message"><?php echo htmlspecialchars($message); ?></textarea>
                        </div>
                        <div class="submit-btn-container">
                            <input type="submit" name="submit" class="submit-btn" value="Send">
                        </div>
                    </form>
                </div>
                <div class="contact-me-content-right">
                    <p>Email: Osemensilas@gmail.com</p>
                    <p>Location: FCT Abuja, Nigeria</p>
                    <p>Phone No.: +2349054060454</p>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Me Ends-->
    <!--About Me Begins-->
    <section id="about-me" class="about_me_id">
        <div class="about-me">
            <div class="about-me-header">
                <h2>About Me</h2>
            </div>
            <div class="about-me-content">
                <div class="about-me-content-top">
                    <div class="about-me-img-container">
                        <img src="../private/imgs/hero.JPG" alt="">
                    </div>
                </div>
                <div class="about-me-cards">
                    <div class="about-me-card">
                        <div class="about-card-header">
                            <h4>Upwork Freelancer</h4>
                        </div>
                        <div class="about-card-img-container">
                            <div class="about-card-img">

                            </div>
                        </div>
                        <div class="about-detail">
                            I'm a full-time freelancer at upwork
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Me Ends-->
    <!--Clients Recommendations Begins-->
    <div id="clients">
        <div class="clients">
            <div class="clients-header">
                <h2>Clients Review</h2>
            </div>
            <div class="clients-reviews">
                <div class="client-review">
                    <div class="client-review-left">
                        <div class="client-img-container hidden">
                            <div class="client-img">M</div>
                        </div>
                    </div>
                    <div class="client-review-right">
                        <div class="client-review-container">
                            <div class="client-name">
                                Emeka Acquaye
                            </div>
                            <div class="client-review-content">
                                <p>I really loved the work Silas did for me. I look forward to hiring him for more jobs.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-review">
                    <div class="client-review-left">
                        <div class="client-img-container hidden">
                            <div class="client-img">M</div>
                        </div>
                    </div>
                    <div class="client-review-right">
                        <div class="client-review-container">
                            <div class="client-name">
                                Bright Brume
                            </div>
                            <div class="client-review-content">
                                <p>Osemen was attentive to my detail, and gave me what I wanted.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-review">
                    <div class="client-review-left">
                        <div class="client-img-container hidden">
                            <div class="client-img">M</div>
                        </div>
                    </div>
                    <div class="client-review-right">
                        <div class="client-review-container">
                            <div class="client-name">
                                Okotete Emmanuel
                            </div>
                            <div class="client-review-content">
                                <p>I had a good experience with Osemen on my team as our developer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-review">
                    <div class="client-review-left">
                        <div class="client-img-container hidden">
                            <div class="client-img">M</div>
                        </div>
                    </div>
                    <div class="client-review-right">
                        <div class="client-review-container">
                            <div class="client-name">
                                Ofuje Sunday
                            </div>
                            <div class="client-review-content">
                                <p>I keep getting friends ask me who built my website. You will surely have more jobs from me.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-review-btns">
                    <div class="right-btn-container">
                        <div class="right-btn">
                            PREV
                        </div>
                    </div>
                    <div class="left-btn-container">
                        <div class="left-btn">
                            NEXT
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Clients Recommendations Ends-->
    <!--Success Begins-->
    <div id="success-id" class="<?php echo $success; ?>">
        <div class="success-id">
            <div class="success-top">
                <h2>Your message has been sent. Please await my reply.</h2>
            </div>
            <div class="success-bottom">
                <a href="index.html#contact-me" class="go-to-homepage">Go Back</a>
            </div>
        </div>
    </div>
    <!--Success Ends-->
    <!--Loading Begins-->
    <section id="loading" class="<?php echo $loading; ?>">
        <div class="loaging-img-container">
            <img src="../private/imgs/Rounded blocks.gif" alt="">
        </div>
    </section>
    <!--Loading Ends-->
    <!--Footer Begins-->
    <footer id="footer">
        <div class="footer">
            <div class="footer-top">
                <div class="footer-img-container">
                    <img src="../private/imgs/web_dev_logo.png" alt="">
                </div>
            </div>
            <div class="footer-bottom">
                <p>All right reserved osemen silas portfolio 2024.</p>
            </div>
        </div>
    </footer>
    <!--Footer ends-->
    <script src="../private/js/index.js"></script>
</body>

</html>