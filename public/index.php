<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIT Combinator</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css"
        rel="stylesheet">

</head>

<body>

    <?php include("../components/navbar.php") ?>

    <section class="bg-dark text-light p-5 text-center">
        <div class="container">
            <div class="gap-3">
                <h1 class="display-3 fw-bold">You Are The <span class="text-warning">Future</span></h1>
                <p class="lead">Naturing today's startup founders, accelerating tommorows big tech leaders</p>
                <button class="btn btn-primary">Join the Club</button>
            </div>
        </div>
    </section>

    <section class="bg-primary text-light">
        <div class="container px-5">
            <div class="d-flex flex-row pt-3 justify-content-center gap-3">
                <i class="bi-megaphone"></i>
                <p>Our next funding round is coming in November! </h2>
            </div>
        </div>
    </section>

    <!-- Hero Image Section -->
    <section>
        <img src="/images/hero.jpg" class="img-fluid" />
    </section>

    <!-- Club in numbers -->
    <section class="text-dark p-5">
        <div class="container">
            <div class="row">
                <div class="col-sm d-flex flex-column justify-content-center text-center">
                    <p class="fw-bold display-4">1,433</p>
                    <p class="text-muted">Members</p>
                </div>

                <div class="col-sm d-flex flex-column justify-content-center text-center">
                    <p class="fw-bold display-4">23</p>
                    <p class="text-muted">VC Rounds</p>
                </div>

                <div class="col-sm d-flex flex-column justify-content-center text-center">
                    <p class="fw-bold display-4">24</p>
                    <p class="text-muted">Startups Founded</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 mb-5 ">
        <div class="container d-flex flex-column justify-content-center text-center gap-3">

            <div>
                <h2 class="display-5">Join HIT Combinator</h2>
                <p class="text-muted">Join Zimbabwe's #1 univerisity startup accelerator and incubation program backed by industry leaders</p>
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Your HIT email" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-primary" type="button" id="button-addon2">Join The Club</button>
            </div>
        </div>
    </section>

    <section class="container d-flex flex-column gap-3 mb-5">
        <p class="text-center display-5">Frequently Asked Questions</p>
        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is HIT Combinator
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>HIT Combinator is a tech start up accelerator and incubation hub for HIT Students. Entry into the club is free and we are active through out the year even during holidays. We provide our club members with an opportunity to accelerate their startup ideas. We provide mentorship, visibility, financial & technical support to our members</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                        How can I register
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Registration to HIT Combinator is absolutely free of charge. There are no registration payments or recuring subscriptions. All you need to do is fill in the <a href="/join">Registration Form</a>, providing your first name, last name, email and phone number and we will get back to you</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                        When is the next funding round
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>We have a total of 4 funding rounds each year. One funding round each quater, January, April, July, October</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("../../components/footer.php") ?>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>