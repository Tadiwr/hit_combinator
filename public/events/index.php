<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>

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
    <?php include("../../components/navbar.php") ?>

    <section class="bg-dark text-light d-flex justify-content-center flex-column text-center p-5">
        <h1 class="fw-bold display-3">Events</h1>
        <p class="text-muted">Club event calendar</p>
    </section>

    <section class="py-5">
        <div class="container d-flex flex-column gap-5" style="padding-left: 10%; padding-right: 10%;">
            <div class="card p-5 d-flex flex-column gap-2">
                <p class="display-5">Microsoft Office Master Class</p>
                <img src="/images/event_1.jpg" class="img-fluid" />
                <p class="text-muted">Learn how to master the Microsoft Office 360 Suite to manage your business </p>

                <div>
                    <div class="d-flex gap-1 fw-bold text-muted">
                        <i class="bi-calendar"></i>
                        <p>25 November 2026</p>
                    </div>
                    
                    <div class="d-flex gap-1 fw-bold text-muted">
                        <i class="bi-clock"></i>
                        <p>14:30</p>
                    </div>
                </div>
            </div>

            <div class="card p-5 d-flex flex-column gap-2">
                <p class="display-5">November Pitch Deck</p>
                <img src="/images/event_2.jpg" class="img-fluid" />
                <p class="text-muted">Join us for our 4th funding round of 2026</p>

                <div>
                    <div class="d-flex gap-1 fw-bold text-muted">
                        <i class="bi-calendar"></i>
                        <p>29 November 2026</p>
                    </div>
                    
                    <div class="d-flex gap-1 fw-bold text-muted">
                        <i class="bi-clock"></i>
                        <p>08:30</p>
                    </div>
                </div>
            </div>

            <div class="card p-5 d-flex flex-column gap-2">
                <p class="display-5">Combinator Hackathon</p>
                <img src="/images/event_3.jpg" class="img-fluid" />
                <p class="text-muted">Show your skills, your grit and your determination in our year end Python hackathon</p>

                <div>
                    <div class="d-flex gap-1 fw-bold text-muted">
                        <i class="bi-calendar"></i>
                        <p>26-31 December 2026</p>
                    </div>
                    
                    <div class="d-flex gap-1 fw-bold text-muted">
                        <i class="bi-clock"></i>
                        <p>08:30</p>
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