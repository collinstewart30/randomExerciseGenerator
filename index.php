<?php
include_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<title>Werk It - Random Exercise Generator</title>
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Bootstrap icons-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="css/styles.css" rel="stylesheet" />
<link href="css/custom.css" rel="stylesheet" />
<script src="script.js"></script>
</head>
<body>
<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="#!">Werk It</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#workout">Exercises</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Don't know where to start when working out?</h1>
                    <p class="lead text-white-50 mb-4">Quickly find a random exercise you should be doing based on your workout level and what type of exercise you are looking for.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#workout">Get Started</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#about">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- About section-->
<section class="py-5 border-bottom" id="about">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
            <div class="col-lg-4">
                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                <h2 class="h4 fw-bolder">Featured title</h2>
                <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                <a class="text-decoration-none" href="#!">
                    Call to action
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Workout section-->
<section class="bg-light py-5 border-bottom" id="workout">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <p>Right now an exercise is selected randomly from 3 different tables (upperbody, lowerbody, and cardio). Next give the option to select with a button.</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <?php
            $sql = "SELECT ID, Name, Description FROM exercises";
            $result2 = mysqli_query($conn, $sql);
            //Get a random number to randomly get table to select from
            $randomNumber = rand(1,3);

            if ($randomNumber == 1) {
                //if the random number from above is 1, select the upperbody table as the $result variable
                $result = mysqli_query($conn,"SELECT id, name, description, videoURL, level FROM upperbody ORDER BY RAND() limit 1");
            }
            else if ($randomNumber == 2) {
                //if the random number from above is 2, select the upperbody table as the $result variable
                $result = mysqli_query($conn,"SELECT id, name, description, videoURL, level FROM lowerbody ORDER BY RAND() limit 1");
            }
            else {
                //if the random number from above is 3 or different, select the upperbody table as the $result variable
                $result = mysqli_query($conn,"SELECT id, name, description, videoURL, level FROM cardio ORDER BY RAND() limit 1");
            }

            //add the content to the page using a random selection from the query above
            while($row = mysqli_fetch_array($result)) {
                echo "<div class='exercise-desc'><h2 class='fw-bolder' id='exercise-title'>" . $row["name"]. "</h2><br/><strong>Description</strong> - " . $row["description"]. "</br><strong>Level</strong> - " .$row["level"]. "</div>";
                ?>
                <div class="first col-lg-2 col-sm-0"></div>
                <div class="second col-lg-8 col-sm-12">
                <?php
                echo "<div class='video-responsive'><iframe width='560' height='315' src='" . $row["videoURL"]. "' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
            }
            ?>
                </div>
                <div class="third col-lg-2 col-sm-0"></div>
            <?php
            
            mysqli_close($conn);
            ?>
            <div class="button-cont">
                <button onclick="reloadPage()" class="btn btn-dark">New Exercise</button>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section-->
<section class="py-5 border-bottom" id="testimonials">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <h2 class="fw-bolder">Customer testimonials</h2>
            <p class="lead mb-0">Our customers love working with us</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <!-- Testimonial 1-->
                <div class="card mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">Thank you for putting together such a great product. We loved working with you and the whole team, and we will be recommending you to others!</p>
                                <div class="small text-muted">- Peter Parker, NYC</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Testimonial 2-->
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                            <div class="ms-4">
                                <p class="mb-1">The whole team was a huge help with putting things together for our company and brand. We will be hiring them again in the near future for additional work!</p>
                                <div class="small text-muted">- Chris Hemsworth, Asgard</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact section-->
<section class="bg-light py-5" id="contact">
    <div class="container px-5 my-5 px-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h2 class="fw-bolder">Get in touch</h2>
            <p class="lead mb-0">We'd love to hear from you</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputName" type="text" placeholder="Enter your name..." />
                        <label for="inputName">Full name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                        <label for="inputEmail">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPhone" type="tel" placeholder="(123) 456-7890" />
                        <label for="inputPhone">Phone number</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="inputMessage" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                        <label for="inputMessage">Message</label>
                    </div>
                    <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Submit</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
